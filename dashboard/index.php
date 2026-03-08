<?php
session_start();
if (!isset($_SESSION['nama'])) {
    echo "<script>alert('lo bukan member sana lo suki')</script>";
    header("Location: ../auth/login.php");

    exit;
}
?>
<h1>halo <?= $_SESSION['nama'] ?> </h1>

<a href="../auth/logout.php"><button>Logout</button></a>