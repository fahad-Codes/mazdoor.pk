<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";

  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
  </head>
  <body>
  <div class="menu-container">
  <div class="logo">
    <img src="logo.png" alt="Logo">
  </div>
  <ul class="menu">
    <li><a href="/mazdoor/index.php">Home</a></li>
    <li><a href="/mazdoor/viewpost.php">Jobs</a></li>
    <li><a href="/mazdoor/createpost.php">Hire</a></li>
    <li><a href="/mazdoor/logout.php">Logout</a></li>
  </ul>
</div>
<div class="login-container">
  <form class="" action="" method="post" autocomplete="off">
    <h1>Login</h1>
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required value=""><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required value=""><br><br>
    <button type="submit" class="btn" name="submit">Login</button>
  </form> 

    <br>
    <a href="registration.php">Registration</a>
  </body>
</html>