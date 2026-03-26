<?php
session_start();
require "../../config/app.php";
require BASE_PATH . "config/database.php";
require BASE_PATH . "config/debug.php";
$id_smt = $_POST['id-semester'];
$mtkl = $_POST['matakuliah'];

$cek = "SELECT * FROM matakuliah where id_semester='$id_smt' AND nama_matakuliah='$mtkl'";
$result = mysqli_query($conn, $cek);
if(mysqli_num_rows($result)>0){
    echo "
        <script>
            alert('matakuliah udah ada kocak');
            window.location.href='". BASE_URL ."index.php?page=mtkl-create&id=". $id_smt . "';
        </script>
    ";
}
$sql = "INSERT INTO matakuliah (id_semester, nama_matakuliah) values ('$id_smt', '$mtkl')";
mysqli_query($conn, $sql);
echo "
        <script>
            alert('matakuliah berhasil di simpan');
            window.location.href='". BASE_URL ."index.php?page=matakuliah&id=". $id_smt . "';
        </script>
    ";
