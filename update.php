<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $job_id = $_POST['id'];
    $result = mysqli_query($conn, "SELECT * FROM job_posts WHERE jod_id=' $job_id'");
    $rows=mysqli_fetch_array($result);
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
    <a href="logout.php">Logout</a>

<form method="POST" action="sqlupdate.php">
    <input type="hidden" id="job-name" name="job_id" value="<?php echo $rows['jod_id']; ?> "><br>
    <label for="job-name">Job Name:</label><br>
    <input type="text" id="job-name" name="job_name" value="<?php echo $rows['job_name']; ?> "><br>
    <label for="job-description">Job Description:</label><br>
    <textarea id="job-description" name="job_description" value="<?php echo $rows['job_description']; ?> "></textarea><br>
    <label for="job-category">Job Category:</label><br>
    <select id="job_category" name="job_category"  value="<?php echo $rows['category']; ?> ">
    <option value="administrative">Administrative</option>
    <option value="technical">Technical</option>
    <option value="creative">Creative</option>
    <option value="sales">Sales</option>
    </select><br>
    <label for="price" >Price:</label><br>
    <input type="number" id="price" name="price" value="<?php echo $rows['price']; ?> "><br><br>
    <input type="submit" class="btn" name="update">
</form> 
  </body>
</html>