<?php 
session_Start();
if(isset($_SESSION['user_id'])){
    if($page == "login"){
        echo"
    <Script>
        alert('lo udah login kocak ngapain login lagi');
        window.location.href='". BASE_URL ."index.php?page=dashboard';
    </Script>
    ";
    }else{
        echo"
    <Script>
        alert('lo udah regist kocak ngapain regist lagi');
        window.location.href='". BASE_URL ."index.php?page=dashboard';
    </Script>
    ";
    }
}

?>