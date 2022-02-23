<?php include 'header/header.php' ?>

<!-- account form section starts  -->

<div class="account-form">

   <div id="close-form" class="fas fa-times"></div>

   <div class="buttons">
      <span class="btn active login-btn">login</span>
      <span class="btn register-btn">register</span>
   </div>

   <form class="login-form active" action="">
      <h3>login now</h3>
     
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="#">forgot password?</a>
      </div>
      <input type="submit" value="login now" class="btn">
   </form>

   <form class="register-form" action="">
      <h3>register now</h3>
      <input type="text" placeholder="enter your name" class="box">
      <input type="text" placeholder="enter your username" class="box">
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <input type="password" placeholder="confirm your password" class="box">
      <input type="submit" value="register now" class="btn">
   </form>

</div>

<!-- account form section ends -->

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">
      
      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
            <div class="content">
               <h3>the best courses you will find find here!</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               <a href="sidebar/sidebar.html" class="btn">get started</a>
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
            <div class="content">
               <h3>the best courses you will find find here!</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               <a href="#" class="btn">get started</a>
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
            <div class="content">
               <h3>the best courses you will find find here!</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               <a href="#" class="btn">get started</a>
            </div>
         </section>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- home section ends -->

<!-- subjects section starts  -->

<section class="subjects">

   <h1 class="heading">our popular subjects</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/subject-icon-1.png" alt="">
         <h3>graphic design</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/subject-icon-2.png" alt="">
         <h3>mathemetics</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/subject-icon-3.png" alt="">
         <h3>teaching</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/subject-icon-4.png" alt="">
         <h3>development</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/subject-icon-5.png" alt="">
         <h3>science</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/subject-icon-6.png" alt="">
         <h3>engineering</h3>
         <p>12 modules</p>
      </div>

   </div>

</section>

<!-- subjects section ends -->

<!-- home courses slider section starts  -->

<section class="home-courses">

   <h1 class="heading"> our popular courses </h1>

   <div class="swiper home-courses-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-1.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-2.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-3.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-4.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-5.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-6.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

      </div>

   </div>

</section>

<!-- home courses slider section ends -->

<div class="container">
   <input type="radio" name="dot" id="one">
   <input type="radio" name="dot" id="two">
   <h2 class="heading"> Team Members </h2>
   <div class="main-card">
     
     <div class="cards">
      
       <div class="card">
        <div class="content">
          <div class="img">
            <img src="bharat.jpg" alt="">
          </div>
          <div class="details">
            <div class="name">Bharat Jhawar</div>
            <div class="job">BCA Student</div>
          </div>
          <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
       </div>
       <div class="card">
        <div class="content">
          <div class="img">
           <img src="subhash.png" alt="">
          </div>
          <div class="details">
            <div class="name">Subhash Ladumor</div>
            <div class="job">BCA Student</div>
          </div>
          <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
       </div>
       <div class="card">
        <div class="content">
          <div class="img">
           <img src="ninad.jpg" alt="">
          </div>
          <div class="details">
            <div class="name">Ninad Virani</div>
            <div class="job">BCA Student</div>
          </div>
          <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
       </div>
     </div>
     <div class="cards">
       <div class="card">
        <div class="content">
          <div class="img">
            <img src="bharat.jpg" alt="">
          </div>
          <div class="details">
            <div class="name">Bharat Jhawar</div>
            <div class="job">BCA Student</div>
          </div>
          <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
       </div>
       <div class="card">
        <div class="content">
          <div class="img">
           <img src="subhash.png" alt="">
          </div>
          <div class="details">
            <div class="name">Subhash Ladumor</div>
            <div class="job">BCA Student</div>
          </div>
          <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
       </div>
       <div class="card">
        <div class="content">
          <div class="img">
           <img src="ninad.jpg" alt="">
          </div>
          <div class="details">
            <div class="name">Ninad Virani</div>
            <div class="job">BCA</div>
          </div>
          <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
       </div>
     </div>
     </div>
   </div>
   <div class="button">
     <label for="one" class=" active one"></label>
     <label for="two" class="two"></label>
   </div>
 </div>





<!-- footer section starts  -->



<!-- footer section ends -->
<?php include 'footer/footer.php' ?>






<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>