<?php
function makeGetRequest($url, $headers = [])
{
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

echo "Current domain: $current_domain\n";

include "themes/theme1/index.php"
    ?>