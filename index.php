<?php

// URL to send the request to
$url = 'http://dhoom4u.me:80/stalker_portal/server/load.php?action=create_link&type=itv&cmd=ffrt%20http://localhost/ch/7461&JsHttpRequest=1-xml';

// Request headers
$headers = array(
    'Cookie: mac=00%3A1A%3A79%3A5D%3A45%3AAD; stb_lang=en; timezone=Asia%2FKolkata;',
    'Referer: http://dhoom4u.me/stalker_portal/c/',
    'X-User-Agent: Model: MAG322; Link: Ethernet',
    'Accept: */*',
    'Connection: Close',
    'Authorization: Bearer 81035AB7AC7509D569A4F9A9837B6D79',
    'Host: dhoom4u.me',
    'Accept-Encoding: gzip',
    'User-Agent: okhttp/3.12.13'
);

// Create context options
$options = array(
    'http' => array(
        'header' => implode("\r\n", $headers)
    )
);

// Create stream context
$context = stream_context_create($options);

// Send GET request
$response = file_get_contents($url, false, $context);

// Decode gzip response
$response_decoded = gzdecode($response);

// Check if the response contains the "cmd" key
if (strpos($response_decoded, '"cmd"') !== false) {
    // Extract the URL value
    preg_match('/"cmd":"(.*?)"/', $response_decoded, $matches);
    if (isset($matches[1])) {
        $url = json_decode('"' . $matches[1] . '"');
        echo $url;
    } else {
        echo "URL not found in the response.";
    }
} else {
    echo "Response does not contain the 'cmd' key.";
}

?>
