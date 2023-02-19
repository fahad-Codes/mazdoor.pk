<?php
require 'config.php';
if(!empty($_SESSION["id"])){
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
    <div class="heading">
      <h3>Mazdoor.Pk</h3>
      <h5>Is a professional  <br> provider's network</h5>
    </div>
    <div class="headingimg">
      <img src="frame.png">
    </div>
    <div class="heading2">
      <h3>helps you to find and hire best <br> skilled professionals near your area</h3>
      <h5>Hundreds of service providers waiting to serve you</h5>
      <form action="viewpost.php">
    <input type="submit" value="Explore Now" class="btn">
</form>
    </div>
    <div class="slideshow-container">
  <div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="1.jpg" style="width:100%">
  <div class="text">\</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="4.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4/ 4</div>
  <img src="3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
<br><br><br>

<div class="container">
  <div class="left">
    <h3>What is Mazdoor.pk</h3>
    <p>Urban App is a platform that connects customers to the skilled, experienced and reliable service professionals in their own locality.

Urban App is the one-stop destination for all home/office needs which includes Plumber, Electrician, Carpenter, Painter and AC Repair services at their doorstep.</p>
  </div>
  <div class="right">
    <h3>Why it matters</h3>
    <p>We are creating a digital environment that empowers millions of service professionals and connect them directly with customers.

We aim to bring technicians and service professionals directly at fingertips, where customers can explore variety of services and hire the best professionals for all kind of work they need at home or office.</p>
  </div>
</div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Contact Us</h4>
        <ul>
          <li>Email: info@serviceswebsite.com</li>
          <li>Phone: 555-555-5555</li>
          <li>Address: 123 Main St, Anytown USA</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Our Services</h4>
        <ul>
          <li><a href="/mazdoor/index.php">Home</a></li>
          <li><a href="/mazdoor/viewpost.php">Jobs</a></li>
          <li><a href="/mazdoor/createpost.php">Hire</a></li>
          <li><a href="/mazdoor/logout.php">Logout</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Follow Us</h4>
        <ul class="social-links">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="copyright">Copyright &copy; 2023 Services Website. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>


<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


  </body>
  <script>


  </script>
</html>