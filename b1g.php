<?php
// Get the id parameter from the URL
$id = $_GET['id'];

// Map IDs to their corresponding URLs
$id_mapping = [
    "maa-gold" => "https://ardinesh-pc-remote.puspas.com.np/live-tv/dittotvv/live/maa-gold/index.m3u8",
    // Add more mappings as needed
];

// Check if the ID exists in the mapping
if (array_key_exists($id, $id_mapping)) {
    // Redirect to the original URL
    header("Location: " . $id_mapping[$id]);
    exit();
} else {
    // If the ID is not found, redirect to an error page or handle it accordingly
    header("Location: error.php");
    exit();
}
?>
