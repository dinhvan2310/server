<?php
function makeGetRequest($url, $headers = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $response = curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    $error = null;
    if (curl_errno($ch)) {
        $error = curl_error($ch);
    }
    
    curl_close($ch);
    
    return [
        'content' => $response,
        'status_code' => $statusCode,
        'error' => $error
    ];
}

$current_domain = '';
if (isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $current_domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_X_FORWARDED_HOST'];
} else if (isset($_SERVER['HTTP_REFERER'])) {
    $current_domain = $_SERVER['HTTP_REFERER'];
} else {
    $current_domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
}
echo $current_domain . '<br>';
$response = makeGetRequest('https://minimil.onrender.com/api/websites?domain='. $current_domain);

$responseData = json_decode($response['content']);

echo $response['content'] . '<br>';

$page = isset($responseData->data->template) ? $responseData->data->template : '';
$validPages = [
    '1' => 'themes/theme1/index.php',
];

if (array_key_exists($page, $validPages) && file_exists($validPages[$page])) {
    include $validPages[$page];
}

$response_fb = makeGetRequest('https://minimil.onrender.com/api/websites?domain_fb='. $current_domain);
$responseData_fb = json_decode($response_fb['content']);
$page_fb = isset($responseData_fb->data->fb_template) ? $responseData_fb->data->fb_template : '';
$validPages_fb = [
    '1' => 'fb_themes/theme1/index.php',
    '2' => 'fb_themes/theme2/index.php',
    '3' => 'fb_themes/theme3/index.php',
];

if (array_key_exists($page_fb, $validPages_fb) && file_exists($validPages_fb[$page_fb])) {
    include $validPages_fb[$page_fb];
}
?>