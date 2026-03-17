<nav class="navbar">

    <div class="nav-judul">
        <a href="<?= BASE_URL . "index.php?page=dashboard" ?>" class="nav-text-j">Study Vault</a>
    </div>

    <div class="nav-button">
        <a class="nav-a" href="<?= BASE_URL . "index.php?page=semester" ?>">semester</a>
        <a class="nav-a" href="#">matakuliah</a>
        <a class="nav-a" href="">catatan</a>
    </div>

    <div class="nav-username">
        <p class="nav-text-u"><?= $_SESSION['nama'] ?></p>
        <a class="logout" href="/../../studyvault/actions/process/logout.php">logout</a>
    </div>

</nav>