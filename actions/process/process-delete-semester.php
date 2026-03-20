<?php
require "../../config/app.php";
require BASE_PATH . "config/database.php";
require BASE_PATH . "config/debug.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    echo"
        <script>
            alert('waduh id nya gak ada brow');
        </script>
    ";
}

$sql = "DELETE FROM semester where id_semester='$id'";
mysqli_query($conn, $sql);
echo"
<Script>
    alert('semester berhasil di hapus');
    window.location.href='" . BASE_URL . "index.php?page=semester';
</Script>
";