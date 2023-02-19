<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
if(isset($_POST["submit"])){
  $job_name = $_POST["job_name"];
  $job_description = $_POST["job_description"];
  $job_category = $_POST["job_category"];
  $price = $_POST["price"];

  $query = "INSERT INTO job_posts VALUES('', '$job_name','$job_category','$id','$job_description', '$price')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Post created successful'); </script>";

}
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
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
<br><br><br><br>
    <h1>Welcome <?php echo $row["name"]; ?></h1>
    <a href="logout.php">Logout</a>

<form method="post">
    <label for="job-name">Job Name:</label><br>
    <input type="text" id="job-name" name="job_name"><br>
    <label for="job-description">Job Description:</label><br>
    <textarea id="job-description" name="job_description"></textarea><br>
    <label for="job-category">Job Category:</label><br>
    <select id="job_category" name="job_category">
    <option value="administrative">Administrative</option>
    <option value="technical">Technical</option>
    <option value="creative">Creative</option>
    <option value="sales">Sales</option>
    </select><br>
    <label for="price">Price:</label><br>
    <input type="number" id="price" name="price"><br><br>
    <input type="submit" class="btn" name="submit">
</form> 
  </body>
</html>