<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo"
        <script>
            alert('login dulu mas');
            window.location.href='". BASE_URL ."index.php?page=login';
        </script>
    ";
    // header("Location: index.php?page=login");
}
?>