<?php
session_start();
require "../../config/debug.php";
require "../../config/database.php";
require "../../config/app.php";
$user = $_SESSION['user_id'];
$mtkl = $_POST['mtkl'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$rangkuman = $_POST['rangkuman'];

$sql = "insert into catatan (id_matakuliah, id_user, judul, isi, rangkuman) values ('$mtkl','$user','$judul','$isi','$rangkuman')";
$result = mysqli_query($conn, $sql);
echo "
        <script>
        alert('catatan berhasil di simpan');
            window.location.href='". BASE_URL ."index.php?page=catatan&id=$mtkl';
        </script>
    ";

// echo"
//     // id matakuliah = " . $id_mtkl . ", id user = ". $id_user .", judul = ". $judul .", isi = ". $isi .", rangkuman = ". $isi .".
// ";
?>
    