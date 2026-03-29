<?php
$user = $_SESSION['user_id'];
$sql = "SELECT * from matakuliah JOIN semester ON matakuliah.id_semester = semester.id_semester where id_user='$user'";
$result = mysqli_query($conn, $sql);
?>
<div class="c-content f-arialn">
    <div class="c-judul lb">
        <h1 class="judul">Matakuliah</h1>
        <p class="sub-judul">temukan semua matakuliah anda. <br> <span class="light">(halaman ini berisi kumpulan dari matakuliah dari semua semester. jika ingin melihat berdasarkan semester yang ada buka melalui menu semester)</span></p>
    </div>

    <div class="c-semester">
        <a id="tambah-semester" class="c-smt-button" href="index.php?page=mtkl-create-all">
            <div class="add-button-semester">Tambah Semester</div>
        </a>
        <?php
        if (mysqli_num_rows($result) == 0) {
            echo "<div class='sign'>
                        <h2>semester anda belum terdaftar</h2>
                        <h3>buat semester sekarang</h3>
                        <a href='index.php?page=mtkl-create&id=". $id_smt ."' class='c-smt-button'>
                        <div class='smt-button'>buat matakuliah</div>
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
            <a class="sc-semester" href="index.php?page=matakuliah&id=<?= $mtkl['id_semester'] ?>">
                <div class="semester">
                    <p style="color: black; font-weight: bold;"><?= $mtkl['nama_matakuliah'] ?></p>
                    <a href="/studyvault/actions/process/process-delete-matakuliah.php?id=<?= $mtkl['id_matakuliah'] ?>" onclick="return konfirmasi()"> <img src="/studyvault/assets/image/hapus.png" style="width: 35px;" alt="" srcset=""></a>
                </div>
            </a>
        <?php
        endwhile;
        ?>
    </div>
</div>
<script>
    function konfirmasi() {
        return confirm("yakin mw hapus data?");
    }
</script>