<?php
    if(isset($_POST['login'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if($user == "admin" && $pass == "admin"){
            $_SESSION['user'] = $user;
            $_SESSION['nama'] = "Nicolas Martin";
            $_SESSION['level'] = "Mahasiswa";

            //membuat cookie
            setcookie("jammasuk",date("Y-m-d H:i:s"), time() + 60);

            //arahkan ke halaman index
            header("Location: index.php");
        }else{
            //arahkan ke halaman login
            header("Location: login.php");
        }
        //buat session
        session_start();
        
    }else{
        //lempar ke halaman login
        header("Location: login.php");
    }
?>