
<!DOCTYPE html>
<html>
<head>
   <title>Halaman Admin - www.malasngoding.com</title>
</head>
<body>
    <?php 
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($session['level']==""){
    header("location:index.php?pesan=gagal");
}
 ?>
 <h1>Halaman Admin</h1>
 
 <p>halo <b><?php echo $_session['username'];?></b> Anda Telah login sebagai <b><?php echo $_session['level'];?></b>.</p>
 <a href="logout.php">LOGOUT</a>


<br/>
<br/>

  <a>Membuat login Multi Level Dengan PHP</a>
</body>
</html>
