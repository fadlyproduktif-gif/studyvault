<?php
$user = $_SESSION['user_id'];
$sql = "select id_semester, nama_semester from semester where id_user='$user' ";
$result = mysqli_query($conn, $sql);
?>

<div class="c-content f-arialn">
    <div class="c-judul lb">
        <h1 class="judul">Semester</h1>
        <p class="sub-judul">temukan semester perkuliahan anda.</p>
    </div>

    <div class="c-semester">
        <?php
        if (mysqli_num_rows($result) == 0) {
            echo "<div class='sign'>
                        <h2>semester anda belum terdaftar</h2>
                        <h3>buat semester sekarang</h3>
                        <a href='" . BASE_URL . "index.php?page=smt-create' class='c-smt-button'>
                        <div class='smt-button'>buat semester</div>
                        </a>
                    </div>";
        }
        ?>
        <a class="c-smt-button" href="<?= BASE_URL . 'index.php?page=smt-create' ?>"><div class="add-button-semester">Tambah Semester</div></a>
        <?php
        while ($smt = mysqli_fetch_assoc($result)) :; ?>
            <a class="sc-semester" href="#">
                <div class="semester">
                    <p style="color: black; font-weight: bold;"><?= $smt['nama_semester'] ?></p>
                    <a href="/studyvault/actions/process/delete-semester.php?id=<?= $smt['id_semester'] ?>"> <img src="/studyvault/assets/image/hapus.png" style="width: 35px;" alt="" srcset=""></a>
                </div>
            </a>
        <?php
        endwhile;
        ?>

    </div>
</div>