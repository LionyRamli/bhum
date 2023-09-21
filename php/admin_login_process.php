<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace with your admin credentials
    $admin_username = "admin";
    $admin_password = "admin_password";

    $entered_username = $_POST["username"];
    $entered_password = $_POST["password"];

    if ($entered_username == $admin_username && $entered_password == $admin_password) {
        // Admin authentication successful
        $_SESSION["admin"] = true;
        header("Location: index.php"); // Redirect to the admin dashboard upon successful login
        exit();
    } else {
        // Admin authentication failed
        echo "Invalid admin username or password. Please try again.";
    }
}
?>
