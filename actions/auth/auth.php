<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('lo bukan member sana lo suki')</script>";
    header("Location: index.php?page=login");
}
?>