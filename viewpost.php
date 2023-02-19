<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];

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
<br><br><br><br> <?php
     $result = mysqli_query($conn, "SELECT * FROM job_posts");

  // Check if there are any results
  if ($result->num_rows > 0) {
    // Output the job posts
    while($row = mysqli_fetch_assoc($result)) {
      echo '<div class="job-post">';
      echo '<h3 class="job-title">' . $row['job_name'] . '</h3>';
      echo '<p class="job-description">' . $row['job_description'] . '</p>';
      echo '<p class="job-description">' . $row['price'] . '</p>';
      echo '<form action="/mazdoor/delete.php" method="post">';
      echo '<input type="hidden" name="id" value="' . $row['jod_id'] . '">';
      echo '<input type="submit" class="delete-button" value="Delete">';
      echo '</form>';
      echo '<form action="/mazdoor/update.php" method="post">';
      echo '<input type="hidden" name="id" value="' . $row['jod_id'] . '">';
      echo '<input type="submit" class="delete-button" value="Update">';
      echo '</form>';
      echo '</div>';
    }
  } else {
    // No results found
    echo 'No job posts found';
  }
  ?>
  </body>
</html>