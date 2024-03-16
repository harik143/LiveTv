<?php
// Get the id parameter from the URL
$id = $_GET['id'];

// Construct the original URL
$original_url = "https://livetvbox.live:8080//live/Michelle123/Michelle123/$id.ts";

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $original_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session
$video_content = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Set appropriate headers
header("Content-Type: video/mp2t");
header("Content-Length: " . strlen($video_content));

// Output the video content
echo $video_content;
?>
