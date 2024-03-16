<?php
// Original URL
$original_url = "https://b1g.ooo:80/live/98765432/98765432/689321";

// Parse the URL
$parsed_url = parse_url($original_url);

// Get the path components
$path_components = explode('/', $parsed_url['path']);

// Extract the ID
$id = end($path_components);

// Construct the new URL
$new_url = "https://harik143.github.io/LiveTv/b1g.php?id=$id";

// Redirect to the new URL
header("Location: $new_url");
exit;
?>
