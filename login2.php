<?php
 // open koneksi ke database
 define("db_host", "localhost");
 define("db_user", "root");
 define("db_pass", "");
 define("db_name", "belajar_template");
 
 $konek = mysqli_connect(db_host, db_user, db_pass, db_name);
 if (!$konek){
  die("Error!");
 }
 
 // ===
 
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 // perintah untuk mendapatkan user dari db berdasarkan nama yang di input di form login
 $get_user = "SELECT * FROM users WHERE email = '$email'";
 $result = mysqli_query($konek,$get_user);
 $data = mysqli_fetch_array($result);
 if($data){
  // email yang dimasukan ada di db
  // check password
  if($password == $data['password']){
   Header("Location: login2.html");
  }else{
   Header("Location: login2.php");
  }
 }else{
  Header("Location: login2.php");
 }
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Login Coy</title>
  <link rel="stylesheet" type="text/css" href="gaya.css">  
 </head>
 <body>
  <div class="login">
   <h2 class="login-header">Form Login</h2>
   <form class="login-container" action="Dashboard.php" method="POST">
    <p>
     <input type="email" placeholder="Email" name="email" />
    </p>
    <p>
     <input type="password" placeholder="Password" name="password" />
    </p>
    <p>
     <input type="submit" placeholder="Login Bre" />
    </p>
   </form>
  </div>
 </body>
</html>
