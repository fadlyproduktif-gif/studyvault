<?php
    $user = $_SESSION['user_id'];

$sql = "SELECT * from semester  WHERE id_user='$user'";
$result = mysqli_query($conn, $sql);

?>

<div class="c-content f-arialn">
    <div class="c-judul lb">
        <h1 class="judul">Buat Matakuliah</h1>
        <p class="sub-judul">tentukan matakuliah anda.</p>
    </div>

    <div class="cf-matakuliah">
        <form action="<?= BASE_URL ?>actions/process/process-matakuliah.php" method="post">
            <div class="cft-matakuliah">
                <label class="cft-item"><b>semester</b></label>
                <select name="id-semester">
                    <?php 
                        while($smt = mysqli_fetch_assoc($result)):;
                    ?>
                    <option value="<?= $smt['id_semester'] ?>"><?= $smt['nama_semester'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="cft-matakuliah">
                <label class="cft-item"><b>nama matakuliah</b></label>
                <input class="cft-item" type="text" required name="matakuliah" placeholder="masukkan nama matakuliah">
            </div>
            <input type="submit" value="Tambah Matakuliah">
        </form>
    </div>

</div>