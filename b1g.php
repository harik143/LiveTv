<?php
// Get the id parameter from the URL
$id = $_GET['id'];

// Construct the original URL
$original_url = "http://livetvbox.live:8080/live/Michelle123/Michelle123/$id.ts";

// Get the video content from the original URL
$video_content = file_get_contents($original_url);

// Set appropriate headers
header("Content-Type: video/mp2t");
header("Content-Length: " . strlen($video_content));

// Output the video content
echo $video_content;
?>
