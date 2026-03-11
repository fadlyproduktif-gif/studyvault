<?php
session_start();
require "/studyvault/config/app.php";
require BASE_URL . "/config/database.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (nama_user, email, password) VALUES ('$username', '$email', '$hash')";
$result = mysqli_query($conn, $sql);
?>