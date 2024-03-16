<?php
// Get the id parameter from the URL
$id = $_GET['id'];

// Construct the new URL
$new_url = "https://b1g.ooo:80/live/98765432/98765432/$id";

// Redirect to the new URL
header("Location: $new_url");
exit();
?>
