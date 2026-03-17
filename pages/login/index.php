<div class="con-form">
    <div class="cr-form">
        <h2 style="text-align: center; margin-bottom: 50px;">LOGIN</h2>
        <form class="cf-form" action="/studyvault/actions/process/process-login.php" method="post">
            <div class="ce-form">
                <label class="label-l">Email</label>
                <input class="form" type="email" placeholder="email" name="email">
            </div>
            <div class="ce-form">
                <label class="label-l">Password</label>
                <input class="form" type="password" placeholder="password" name="password">
            </div>
            <input type="submit" value="login">
        </form>
        <p>belum punya akun? <a href="<?= BASE_URL ?>index.php?page=register">buat akun</a> sekarang!</p>
    </div>
</div>