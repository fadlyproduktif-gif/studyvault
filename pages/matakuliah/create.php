<?php
    $id_smt = $_GET['id'];
    $user = $_SESSION['user_id'];

$sql = "SELECT * from semester  WHERE id_semester='$id_smt' AND id_user='$user'";
$cek = mysqli_query($conn, $sql);
if(mysqli_num_rows($cek)== 0){
    echo"akses ditolak";
    exit;
}
?>

<div class="c-content f-arialn">
    <div class="c-judul lb">
        <h1 class="judul">Buat Matakuliah</h1>
        <p class="sub-judul">tentukan matakuliah anda.</p>
    </div>

    <div class="cf-matakuliah">
        <form action="<?= BASE_URL ?>actions/process/process-matakuliah.php" method="post">
            <input type="text" hidden name="id-semester" value="<?= $id_smt ?>">
            <div class="cft-matakuliah">
                <label class="cft-item"><b>nama matakuliah</b></label>
                <input class="cft-item" type="text" required name="matakuliah" placeholder="masukkan nama matakuliah">
            </div>
            <input type="submit" value="Tambah Matakuliah">
        </form>
    </div>

</div>