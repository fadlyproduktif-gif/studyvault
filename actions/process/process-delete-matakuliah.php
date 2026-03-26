<?php
require "../../config/app.php";
require BASE_PATH . "config/database.php";
require BASE_PATH . "config/debug.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $id_smt = $_GET['id-smt'];
} else {
    echo"
        <script>
            alert('waduh id nya gak ada brow');
        </script>
    ";
}

$sql = "DELETE FROM matakuliah where id_matakuliah='$id'";
mysqli_query($conn, $sql);

echo"
<Script>
    alert('semester berhasil di hapus');
    window.location.href='" . BASE_URL . "index.php?page=matakuliah&id=". $id_smt."';
</Script>
";