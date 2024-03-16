<?php
// Get the id parameter from the URL
$id = $_GET['id'];

// Construct the new URL
$new_url = "https://livetvbox.live:8080/live/Michelle123/Michelle123/$id.ts";

// Redirect to the new URL
header("Location: $new_url");
exit();
?>
