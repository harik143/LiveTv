<?php

// Define host and MAC address
$host = "http://dhoom4u.me/stalker_portal";
$mac_address = "00:1A:79:5D:45:AD";

// Check if the 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    // Get the ID from the URL
    $id = $_GET['id'];
    
    // URL to send the request to, replacing the ID dynamically
    $url = "$host/server/load.php?action=create_link&type=itv&cmd=ffrt%20http://localhost/ch/$id&JsHttpRequest=1-xml";

    // Request headers
    $headers = array(
        'Cookie: mac=' . urlencode($mac_address) . '; stb_lang=en; timezone=Asia%2FKolkata;',
        'Referer: ' . $host . '/c/',
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
            
            // Redirect user to the final URL
            header("Location: $url");
            exit;
        } else {
            echo "URL not found in the response.";
        }
    } else {
        echo "Response does not contain the 'cmd' key.";
    }
} else {
    echo "Please provide an ID in the URL.";
}

?>
