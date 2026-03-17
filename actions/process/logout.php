<?php
session_start();
session_unset();
session_destroy();
header("Location: /studyvault/index.php?page=login");

exit;
?>