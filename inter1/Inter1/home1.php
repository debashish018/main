<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Scape</title>
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
      <a href="home1.php" class="active">home</a>
      <a href="about1.php">about</a>
      <a href="package1.php">package</a>
      <a href="book1.php">book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>travel scape</h3>
               <a href="package1.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>Travel planning made simple, smart and secure</h3>
               <a href="package1.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>plan well, wander better</h3>
               <a href="package1.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="icon-6.png" alt="">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img src="icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Welcome to <b>Travel scape</b> -Your Gateway to Unforgettable Journeys!

   At <b>Travel scape</b>, we believe that travel is more than just visiting a destination — it's 
  about creating memories that last a lifetime. As a passionate and reliable travel agency, 
we specialize in curating personalized travel experiences for individuals, families, and groups who seek adventure,
 comfort, and value.</p>
      <a href="about1.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
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
            <a href="book1.php" class="btn">book now</a><br>
            <a href="https://www.planetware.com/tourist-attractions-/dubai-uae-dub-dubai.htm" class="btn1">Read More</a>
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
            <a href="book1.php" class="btn">book now</a><br>
             <a href="https://www.planetware.com/tourist-attractions-/delhi-ind-delhi-delhi.htm" class="btn1">Read More</a>
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
            <a href="book1.php" class="btn">book now</a><br>
            <a href="https://www.planetware.com/tourist-attractions/japan-jpn.htm" class="btn1">Read More</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package1.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->


<section class="partner">
   <h1 class="heading-title"> our partners </h1>
   <div class="box-container">
      <div class="partner">
         <img src="sp1.png" alt="">
      </div>
      <div class="partner">
         <img src="sp2.png" alt="">
      </div>
      <div class="partner">
         <img src="sp3.png" alt="">
      </div>
      <div class="partner">
         <img src="sp4.png" alt="">
      </div>
      <div class="partner">
         <img src="sp5.png" alt="">
      </div>
   </div>
</section>


<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="offer.jpg">
      </div>
   </div>
   <div class="content">
      <h3>upto 50% off</h3>
      <p><b>Bali Dynasty Resort</b> -Kuta, Bali<br>
        A vibrant, full-service resort ideal for families, couples, and groups, Bali Dynasty Resort is located in the heart of South Kuta, 
         just a short walk from the beach, shops, nightlife, and Waterbom Park. Bali Dynasty Resort is a dynamic, 
         beachfront escape in lively Kuta that perfectly blends family-friendly fun with couple-centric
         amenities and business-ready facilities. With plentiful pools, dining options, organized activities, and an unbeatable location,
         it's a top choice for travelers of all ages—and a highly awarded one at that.</p>
      <a href="book1.php" class="btn">book now</a>
   </div>
</section>
<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
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