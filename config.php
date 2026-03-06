<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = "localhost"; // Hostname (usually localhost)
$username = "rsoa_rsoa0285_1"; // User from user
$password = "654321#"; // Password from user
$dbname = "rsoa_rsoa0285_1"; // DB Name (Assuming same as user or standard, usually user_db)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
