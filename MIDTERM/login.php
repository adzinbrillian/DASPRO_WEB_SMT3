<?php
session_start(); // Start session

// Dummy data for demonstration purposes (replace with actual authentication logic)
$admins = [
    "admin" => "password123",
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login credentials
    if (isset($admins[$username]) && $admins[$username] == $password) {
        // Store the username in a session variable
        $_SESSION['username'] = $username;
        $_SESSION['admin_logged_in'] = true;

        // Redirect to the home page after successful login
        header("Location: <midterm>home.php");
        exit();
    } else {
        // If login is incorrect, show an error
        echo "<script>alert('Invalid login credentials.'); window.location.href='../index.html';</script>";
    }
}
