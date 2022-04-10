<?php
session_start();
session_destroy(); //menghapus semua session
//unset($_SESSION['user']);
//lempar ke halaman login
header("Location: login.php");
}
?>