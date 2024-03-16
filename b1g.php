<?php
// Get the id parameter from the URL
$id = $_GET['id'];

// Construct the original URL
$original_url = "http://livetvbox.live:8080//live/Michelle123/Michelle123/$id.ts";

// Read the content of the original URL
$content = file_get_contents($original_url);

// Set the appropriate content type
header("Content-Type: video/mp2t");

// Output the content
echo $content;
?>
