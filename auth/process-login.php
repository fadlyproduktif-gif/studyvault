<?php


    session_start();
    require "../config/database.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    if($user){
        if(password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id_user'];
            $_SESSION['nama'] = $user['nama_user'];
            header("Location: ../dashboard/index.php");
            exit;
        }else{
            echo"<script>alert('password salah')</script>";
            header("Location: ../auth/login.php");
        }

    }else{
        echo"<script>alert('tidak ada user dengan email : $email')</script>";
        header("Location: login.php");
    }
?>

