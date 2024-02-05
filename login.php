<?php

include 'config.php';

if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   header('location:book.html');
} else {
   $message[] = 'incorrect password or email!';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Trip.com</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css" />
</head>

<body>
   <!-- header section starts  -->

   <section class="header">
      <a href="home.html" class="logo">Trip.com</a>
      <form action="" class="search-form">
         <input type="search" id="search-box" placeholder="search here..." />
         <label for="search-box" class="fas fa-search"></label>
      </form>
      <nav class="navbar">
         <a href="home.html">home</a>
         <a href="about.html">about</a>
         <a href="package.html">package</a>
         <a href="login.php">book</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
   </section>

   <!-- header section ends -->

   <div class="heading" style="background: url(images/header-bg-2.jpg) no-repeat">
      <h1>book now</h1>
   </div>

   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
      }
   }
   ?>

   <section class="booking">
      <h1 class="heading-title">login</h1>

      <form action="" method="post" class="book-form">
         <div class="flex">
            <div class="inputBox">
               <span>email :</span>
               <input type="email" name="email" required placeholder="enter email">
            </div>
            <div class="inputBox">
               <span>password :</span>
               <input type="password" name="password" required placeholder="enter password">
            </div>
         </div>
         <input type="submit" name="submit" class="btn" value="login now">
         <p>don't have an account? <a href="register.php">register now</a></p>
      </form>

   </section>
   <!-- footer section starts  -->

   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> Your trip@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Cairo, Egypt - 12345 </a>
         </div>

         <div class="box">
            <h3>quick links</h3>
            <a href="home.html"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.html"> <i class="fas fa-angle-right"></i> package</a>
            <a href="login.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>

         <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         </div>

      </div>

      <div class="credit">
         created by <span>Eng.Rowaida Tamer Mohamed </span> 2022.
      </div>
   </section>

   <!-- footer section ends -->

   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>
</body>

</html>