<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency</title>
 <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home1.php" class="logo"><img src="logo1.jpg"></a>

   <nav class="navbar">
      <a href="home1.php">home</a>
      <a href="about1.php">about</a>
      <a href="package1.php" class="active">package</a>
      <a href="book1.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dubai Tour Packages</h3>
            <p>Explore the glamour and adventure of Dubai with our all-inclusive
            tour package featuring and enjoy it.</p>
            <h2>BDT(3-5 days) 70,000/-</h2>
            <a href="book1.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Delhi Tour Packages</h3>
            <p>Discover the rich history,vibrant culture, and iconic landmarks of
            India's capital with our all-inclusive Delhi tour package.</p>
            <h2>BDT(3-5 days) 32,500/-</h2>
            <a href="book1.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Japan Tour Packages</h3>
            <p>Experience the charm of Japan with the Japan4 tour package, 
            and scenic beauty across four iconic destinations.</p>
            <h2>BDT(3-5 days) 37,500/-</h2>
            <a href="book1.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img-4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Australia Tour Packages</h3>
            <p>Explore the best of Australia with a thrilling tour package featuring iconic landmarks,
             stunning landscapes, and unforgettable adventures.</p>
            <h2>BDT(3-5 days) 50,000/-</h2>
            <a href="book1.php" class="btn">book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>china Tour Packages</h3>
            <p>Discover the wonders of China with a captivating tour package 
            featuring ancient landmarks, vibrant cities, and rich cultural experiences.</p>
            <h2>BDT(3-5 days) 32,900/-</h2>
            <a href="book1.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>singapur Tour Packages</h3>
            <p>Explore the vibrant city-state of Singapore with a tour package filled with world-class attractions, 
               futuristic architecture, and rich cultural experiences.</p>
            <h2>BDT(3-5 days) 46,900/-</h2>
            <a href="book1.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>spain Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our spain top selling packages!</p>
            <h2>BDT(3-5 days) 55,800/-</h2>
            <a href="book1.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>canada Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our canada top selling packages!</p>
            <h2>BDT(3-5 days) 63,500/-</h2>
            <a href="book1.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img-9.jpg" alt="">
         </div>
         <div class="content">
            <h3>barli Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our barli top selling packages!</p>
            <h2>BDT(3-5 days) 42,900/-</h2>
            <a href="book1.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img-10.jpg" alt="">
         </div>
         <div class="content">
            <h3>nepal Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our nepal top selling packages!</p>
            <h2>BDT(3-5 days) 27,900/-</h2>
            <a href="book1.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img-11.jpg" alt="">
         </div>
         <div class="content">
            <h3>maldives Tour Packages</h3>
            <p>Escape to paradise with crystal-clear waters, overwater villas, and unforgettable island experiences.</p>
            <h2>BDT(3-5 days) 85,200/-</h2>
            <a href="book1.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img-12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Russia Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Russia top selling packages!</p>
            <h2>BDT(3-5 days) 32,900/-</h2>
            <a href="book1.php" class="btn">Book Now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
<!-- footer section starts  -->

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home1.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about1.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package1.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book1.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880-2566-756312 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-2222-333333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> srtour25@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Kolkata, India - 0002  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span> Travel scape </span> | Your trusted partner for worldwide adventures!</div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script1.js"></script>

</body>
</html>