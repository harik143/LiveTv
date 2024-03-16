<?php
// Get the id parameter from the URL
$id = $_GET['id'];

// Construct the original URL
$original_url = "http://livetvbox.live:8080//live/Michelle123/Michelle123/$id.ts";

// Redirect to the original URL
header("Location: $original_url");
exit();
?>
