<!DOCTYPE html>
<html>
<head>
    <title>Halaman siswa</title>
</head>
<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }

 ?>
 <h1>halaman pegawai</h1>

 <p>Halo <b><?php echo $_SESSION['username']; ?></b> anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
 <a href="logout.php">LOGOUT</a>

 <br/>
 <br/>

 <a>membuat login multi level dengan php</a>
</body>
</html>
