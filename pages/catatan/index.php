<?php
    $id_mtkl = $_GET['id'] ?? null;
    $user = $_SESSION['user_id'];
    $sql = "select * from catatan where id_matakuliah=$id_mtkl";
    $result = mysqli_query($conn,$sql);
?>
<div class="c-content f-arialn">
    <div class="c-judul lb">
        <h1 class="judul">Catatan</h1>
        <p class="sub-judul">temukan catatan anda.</p>
    </div>

    <div class="c-semester">
        <a id="tambah-semester" class="c-smt-button" href="index.php?page=crt-catatan&id=<?= $id_mtkl ?>">
            <div class="add-button-semester">Tambah Semester</div>
        </a>
        <?php
        if (mysqli_num_rows($result) == 0) {
            echo "<div class='sign'>
                        <h2>catatan anda belum ada</h2>
                        <h3>buat catatan sekarang</h3>
                        <a href='index.php?page=crt-catatan&id=". $id_mtkl ."' class='c-smt-button'>
                        <div class='smt-button'>buat catatan</div>
                        </a>
                    </div>
                    <script>
                        var tmbl = document.getElementById('tambah-semester');
                        tmbl.style.display = 'none';
                    </script>";
        }
        ?>
        <?php
        while ($mtkl = mysqli_fetch_assoc($result)) :; ?>
            <a class="sc-semester" href="index.php?page=catatan&id=<?= $mtkl['id_catatan'] ?>">
                <div class="semester">
                    <p style="color: black; font-weight: bold;"><?= $mtkl['judul'] ?></p>
                    <a href="/studyvault/actions/process/process-delete-matakuliah.php?id=<?= $mtkl['id_matakuliah'] ?>&id-smt=<?= $id_smt ?>" onclick="return konfirmasi()"> <img src="/studyvault/assets/image/hapus.png" style="width: 35px;" alt="" srcset=""></a>
                </div>
            </a>
        <?php
        endwhile;
        ?>
    </div>
</div>