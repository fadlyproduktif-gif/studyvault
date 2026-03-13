<nav class="navbar">

    <div class="nav-judul">
        <p class="nav-text-j">Study Vault</p>
    </div>

    <div class="nav-button">
        <a class="nav-a" href="<?= BASE_URL . "index.php?page=dashboard" ?>">dashboard</a>
        <a class="nav-a" href="">semester</a>
        <a class="nav-a" href="#">matakuliah</a>
    </div>

    <div class="nav-username">
        <p class="nav-text-u"><?= $_SESSION['nama'] ?></p>
        <a class="logout" href="/../../studyvault/actions/auth/logout.php">logout</a>
    </div>

</nav>