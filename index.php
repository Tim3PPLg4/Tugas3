<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

       <h1>membuat login multi user level dengan php dan MySQLi <br/> www.malasngoding.com</h1>

<?php
if(isset($_GET['pesan'])) {
    if($_GET['pesan']=="gagal"){
      echo "<div class='alert'>Username dan Password tidak sesuai !<\div>";
  }

} 
?>

<div class="kotak_login">
    <p class="tulisan_login">Login kang bener!!</p>

     <from action="cek_login.php" method="post">
         <label >Username</label>
          <input type="text" name="username" class="from_login" placeholder="Username .." required="required">
             
            <label>Password</label>
             <input type="password" name="password" class="from_login" placeholder="password .." required="required">

              <input type="submit" class="tombol_login" value="LOGIN">

                <br/>
                <br/>
                <center>
<a class="link" herf="https://www.malasngoding.com">kembali</a>
                <center>
        </from>

   </div>

</body>
</html>
