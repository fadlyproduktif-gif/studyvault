<?php
require "../../config/app.php";
require BASE_PATH . "config/database.php";
require BASE_PATH . "config/debug.php";

if (isset($_GET['id']) && isset($_GET['id-smt'])) {
    $id = $_GET['id'];
    $id_smt = $_GET['id-smt'];
}elseif(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    echo "
        <script>
            alert('waduh id_matakuliahnya gak ada brow');
        </script>
    ";
}

$sql = "DELETE FROM matakuliah where id_matakuliah='$id'";
mysqli_query($conn, $sql);
if (!isset($id_smt)) {
    echo "
<Script>
    alert('matakuliah berhasil di hapus');
    window.location.href='" . BASE_URL . "index.php?page=mtkl-all';
</Script>
";
} else {
    echo "
<Script>
    alert('matakuliah berhasil di hapus');
    window.location.href='" . BASE_URL . "index.php?page=matakuliah&id=" . $id_smt . "';
</Script>
";
}
