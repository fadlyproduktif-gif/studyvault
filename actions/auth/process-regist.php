<?php
session_start();
require "../../config/app.php";
 require BASE_PATH ."config/database.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($username) || empty($email) || empty($password)) {
    echo " <script>alert('field wajib di isi');
            window.location.href='" . BASE_URL . "index.php?page=register';
    </script>";
}

$check = "select * from users where email='$email'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {
    echo "<script>
        alert('email sudah terdaftar gunakan email lain');
        window.location.href='" . BASE_URL . "index.php?page=register';
    </script>";
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (nama_user, email, password) VALUES ('$username', '$email', '$hash')";

mysqli_query($conn, $sql);

echo"<Script>alert('akun telah tersimpan silahkan login');
    window.location.href='" . BASE_URL . "index.php?page=login';
</Script>";

