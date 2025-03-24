<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            echo "<script>alert('Login Successful!'); window.location.href='../homepage.php';</script>";
            exit();
        } else {
            echo "<script>alert('Incorrect Password!'); window.location.href='../login.html';</script>";
        }
    } else {
        echo "<script>alert('User not found!'); window.location.href='../signup.html';</script>";
    }
}
?>
