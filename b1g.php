<?php
function convertUrl($url) {
    $parsed_url = parse_url($url);
    
    // Extract the parts of the original URL
    $path_segments = explode('/', $parsed_url['path']);
    $channel_id = $path_segments[2];
    
    // Construct the new URL
    $new_url = 'https://harik143.github.io/LiveTv/b1g.php?id=' . $channel_id;
    
    return $new_url;
}

// Example usage
$original_url = 'https://b1g.ooo:80/live/98765432/98765432/';
$new_url = convertUrl($original_url);
echo $new_url;
?>
