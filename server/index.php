<?php
function makeGetRequest($url, $headers = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Set timeout to avoid hanging

    $response = curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_errno($ch) ? curl_error($ch) : null;

    curl_close($ch);

    return [
        'content' => $response,
        'status_code' => $statusCode,
        'error' => $error
    ];
}

// Determine the current domain
$current_domain = '';
if (isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    // Sanitize HTTP_X_FORWARDED_HOST
    $current_domain = filter_var($_SERVER['HTTP_X_FORWARDED_HOST'], FILTER_SANITIZE_URL);
    $current_domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $current_domain;
} elseif (isset($_SERVER['HTTP_REFERER'])) {
    // Parse and validate HTTP_REFERER
    $parsed_url = parse_url($_SERVER['HTTP_REFERER']);
    if (isset($parsed_url['host'])) {
        $current_domain = (isset($parsed_url['scheme']) ? $parsed_url['scheme'] : 'http') . '://' . filter_var($parsed_url['host'], FILTER_SANITIZE_URL);
    }
}
if (empty($current_domain)) {
    // Fallback to HTTP_HOST
    $current_domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . filter_var($_SERVER['HTTP_HOST'], FILTER_SANITIZE_URL);
}

// Validate $current_domain
if (!filter_var($current_domain, FILTER_VALIDATE_URL)) {
    // Log error and set default domain (or handle as needed)
    error_log("Invalid current_domain: $current_domain");
    $current_domain = 'https://lucifernsz.com'; // Fallback domain
}

// Encode domain for URL
$encoded_domain = urlencode($current_domain);

// Make API request for main template
$response = makeGetRequest("https://minimil.onrender.com/api/websites?domain=$encoded_domain");
$page = '';
$validPages = [
    '1' => 'themes/theme1/index.php',
];

// Check API response
if ($response['status_code'] === 200 && empty($response['error'])) {
    $responseData = json_decode($response['content'], true); // Use associative array for safety
    if (json_last_error() === JSON_ERROR_NONE && isset($responseData['data']['template'])) {
        $page = (string)$responseData['data']['template']; // Cast to string for safety
    } else {
        error_log("Invalid JSON or missing template in response: " . $response['content']);
    }
} else {
    error_log("API request failed: Status {$response['status_code']}, Error: {$response['error']}");
}

// Include main template if valid
if (array_key_exists($page, $validPages) && file_exists($validPages[$page])) {
    include $validPages[$page];
} else {
    // Fallback to default page or error
    error_log("Invalid or missing template: $page");
    include 'themes/default/index.php'; // Ensure this file exists
}

// Make API request for Facebook template
$response_fb = makeGetRequest("https://minimil.onrender.com/api/websites?domain_fb=$encoded_domain");
$page_fb = '';
$validPages_fb = [
    '1' => 'fb_themes/theme1/index.php',
    '2' => 'fb_themes/theme2/index.php',
    '3' => 'fb_themes/theme3/index.php',
];

// Check API response for Facebook template
if ($response_fb['status_code'] === 200 && empty($response_fb['error'])) {
    $responseData_fb = json_decode($response_fb['content'], true);
    if (json_last_error() === JSON_ERROR_NONE && isset($responseData_fb['data']['fb_template'])) {
        $page_fb = (string)$responseData_fb['data']['fb_template'];
    } else {
        error_log("Invalid JSON or missing fb_template in response: " . $response_fb['content']);
    }
} else {
    error_log("Facebook API request failed: Status {$response_fb['status_code']}, Error: {$response_fb['error']}");
}

// Include Facebook template if valid (only if needed)
if (array_key_exists($page_fb, $validPages_fb) && file_exists($validPages_fb[$page_fb])) {
    // Check if including both templates is intentional
    include $validPages_fb[$page_fb];
} else {
    error_log("Invalid or missing fb_template: $page_fb");
    // Optional: Include default FB template or skip
}

// Debugging: Uncomment to inspect $_SERVER for HTTP_X_FORWARDED_HOST
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';
?>