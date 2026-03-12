<form action="/studyvault/actions/auth/process-login.php" method="post">
    <label>email :</label>
    <input type="email" placeholder="email" name="email" >
    <label>password :</label>
    <input type="password" placeholder="password" name="password">
    <input type="submit" value="login" >
</form>
<p>belum punya akun? <a href="<?= BASE_URL ?>index.php?page=register">buat akun</a> sekarang!</p>