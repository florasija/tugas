<?php
session_start();

// Check if the user is logged in and has the role of admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    // Redirect to the login page or any other appropriate page
    header("Location: login.php");
    exit();
}

// Display the admin dashboard content
echo "Welcome, Admin!";
// Add your admin dashboard content here
?>
