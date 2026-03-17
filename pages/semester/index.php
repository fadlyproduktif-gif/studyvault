<?php
    $user = $_SESSION['user_id'];
    $sql = "select nama_semester from semester where id_user='$user' ";
    $result = mysqli_query($conn, $sql);
?>

<div class="c-content f-arialn">
    <div class="c-judul lb">
        <h1 class="judul">Semester</h1>
        <p class="sub-judul">temukan semester perkuliahan anda.</p>
    </div>

    <div class="c-semester">
        <?php 
            if(mysqli_num_rows($result) == 0){
                echo"<div class='sign'>
                        <h2>semester anda belum terdaftar</h2>
                        <h3>buat semester sekarang</h3>
                        <a href='" . BASE_URL . "index.php?page=smt-create' class='c-smt-button'>
                        <div class='smt-button'>buat semester</div>
                        </a>
                    </div>";
            }
            while($smt = mysqli_fetch_assoc($result)) : ;?>
                    <a class="sc-semester" href="#">
                    <div class="semester">
                    <?= $smt['nama_semester'] ?>
                  </div>
                  </a>
        <?php
            endwhile;
        ?>
        
    </div>
</div>