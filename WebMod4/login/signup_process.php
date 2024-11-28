<?php
include('../includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt password

    // Menambahkan user ke dalam database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->exec($sql)) {
        echo "Sign up successful! <a href='signin.php'>Sign in</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->errorInfo();
    }
}
?>
