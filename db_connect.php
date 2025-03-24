<?php
$servername = "localhost"; // XAMPP ke liye "localhost" hi rahega
$username = "root"; // Default XAMPP username "root" hota hai
$password = ""; // Default password blank hota hai
$database = "bitebazar"; // Tumhara database name jo tumne banaya tha

// ✅ Database Connection Setup
$conn = new mysqli($servername, $username, $password, $database);

// ✅ Connection Check
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
