<?php
session_start();
require "../../config/database.php";
require "../../config/app.php";
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from users where email='$email'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
if ($user) {
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id_user'];
        $_SESSION['nama'] = $user['nama_user'];
        echo "<script>
        alert('login berhasil');
        window.location.href='" . BASE_URL . "index.php?page=dashboard';
        </script>";
        exit;

        // header("Location: /studyvault/index.php?page=dashboard");
        exit;
    } else {
        echo "<script>
        alert('login gagal password anda salah');
        window.location.href='" . BASE_URL . "index.php?page=login';
        </script>";
        exit;
    }
} else {
    echo "<script>alert('tidak ada user dengan email : $email')
        window.location.href='" . BASE_URL . "index.php?page=login'
    </script>";
    
}
