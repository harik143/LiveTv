<?php
// Get the id parameter from the URL
$id = $_GET['id'];

// Construct the original URL based on the ID
$original_url = "https://ardinesh-pc-remote.puspas.com.np/live-tv/dittotvv/live/$id/index.m3u8";

// Redirect to the original URL
header("Location: $original_url");
exit();
?>
