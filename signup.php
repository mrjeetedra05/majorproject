<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    // ✅ Backend Validation (Extra Security)
    if (!preg_match("/^[a-z0-9]+@gmail\.com$/", $email)) {
        echo "<script>alert('Invalid Email Format! Example: mrjettendra@gmail.com'); window.location.href='../signup.html';</script>";
        exit();
    }

    if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/", $password)) {
        echo "<script>alert('Weak Password! Include 1 uppercase, 1 number, 1 special character, and length 8-20.'); window.location.href='../signup.html';</script>";
        exit();
    }

    // ✅ Password Hashing (Security)
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (name, email, password, phone, gender) 
            VALUES ('$name', '$email', '$hashed_password', '$phone', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Signup successful! Now login.'); window.location.href='../login.html';</script>";
    } else {
        echo "<script>alert('Error: Email or Phone already exists!'); window.location.href='../signup.html';</script>";
    }
}
?>
