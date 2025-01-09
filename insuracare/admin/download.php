<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include database connection
include('../config/dbcon.php');

// Get the file name from the URL parameter
$file = basename($_GET['file']); // Use basename to avoid directory traversal issues

// Path to the file
$path = "../uploads/" . $file;

// Check if the file exists
if (file_exists($path)) {
    // Get the file extension
    $file_extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    // Set content type based on the file extension
    switch ($file_extension) {
        case 'pdf':
            $content_type = 'application/pdf';
            break;
        case 'jpg':
        case 'jpeg':
            $content_type = 'image/jpeg';
            break;
        case 'jpg':
            $content_type = 'image/jpg';
            break;
        default:
            $content_type = 'application/octet-stream'; // Default for unknown types
            break;
    }

    // Set appropriate headers for file download
    header('Content-Description: File Transfer');
    header('Content-Type: ' . $content_type);
    header('Content-Disposition: attachment; filename="' . basename($path) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($path));

    // Clear output buffering to avoid corrupting the file
    ob_clean();
    flush();

    // Output the file content for download
    readfile($path);
    exit;
} else {
    // If the file doesn't exist, show an error message
    $_SESSION['message'] = "File not found.";
    header('Location: policy_form.php');
    exit();
}
