<?php
$id_mtkl = $_GET['id'];
$user = $_SESSION['user_id'];

// $sql = "SELECT * from catatan  WHERE id_semester='$id_smt' AND id_user='$user'";
// $cek = mysqli_query($conn, $sql);
// if(mysqli_num_rows($cek)== 0){
//     echo"akses ditolak";
//     exit;
// }
?>

<div class="c-content f-arialn">
    <div class="c-judul lb">
        <h1 class="judul">Buat Catatan</h1>
        <p class="sub-judul">tentukan matakuliah anda.</p>
    </div>

    <div class="cf-matakuliah">
        <form action="<?= BASE_URL ?>actions/process/process-catatan.php" method="post">
            <input class="cft-item" type="hidden" name="mtkl" value="<?= $id_mtkl ?>">
            <div class="cft-matakuliah">
                <label class="cft-item"><b>Judul Catatan</b></label>
                <input class="cft-item" type="text" required name="judul" placeholder="masukkan Judul Catatan">
            </div>
            <div class="cft-matakuliah">
                <label class="cft-item"><b>isi Catatan</b></label>
                <textarea name="isi" class="cft-item" placeholder="masukkan isi catatan"></textarea>
            </div>
            <div class="cft-matakuliah">
                <label class="cft-item"><b>Rangkuman</b></label>
                <textarea name="rangkuman" class="cft-item" placeholder="masukkan rangkuman"></textarea>
            </div>
            <input type="submit" value="Tambah Matakuliah">
        </form>
    </div>

</div>