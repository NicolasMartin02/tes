<?php
    session_start(); //memulai session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
</head>
<body>
    <h1>Hallo <?php echo $_SESSION['nama'];?></h1>
    <a href="index.php">Dashboard</a> 
</body>
</html>