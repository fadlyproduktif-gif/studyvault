<?php
session_start();
require "../../config/app.php";
require BASE_PATH . "config/database.php";
$user = $_POST['user_id'];
$semester = $_POST['semester'];

$cek = "SELECT * FROM semester where id_user='$user' && nama_semester='$semester;";
$result = mysqli_query($conn, $cek);

if ((mysqli_num_rows($result)) > 0) {
    echo "
            <script>
                alert('semester sudah ada. tambahkan saja matakuliah di semester yang sudah ada atau anda bisa menghapus semester kemudian membuat ulang semester';
                window.location.href='" . BASE_URL . "index.php?page=smt-create';
            </script>
        ";
}

$sql = "INSERT INTO semester (id_user, nama_semester) VALUES (id_user='$user', nama_semester='$semester')";
mysqli_query($conn, $sql);
echo "
    <script>
        alert('semester berhasil di buat';
        window.location.href='" . BASE_URL . "index.php?page=semester';
    </script>
";
