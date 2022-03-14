<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/read.webp" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p> We provide you a readers choice service.Choose us and you feel satisfied.Great your dream book here.We are here to inspire you.Pay a remarkable price and get the best book.Here is the mind of the universe.
</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>This was my stay-up-late-to-read book for February. It takes place on a rugged homestead in 1920s Alaska, where Jack and Mabel arrive from the East Coast to start a new life after the devastating loss of their stillborn child. One night after building a snowman, it magically comes to life in the form of Faina, a young girl who changes their lives in ways the couple never expected. Although the novel takes inspiration from a Russian fairy tale and is laced with a sense of quiet magic, it’s also firmly rooted in the realities of daily survival in an unforgiving wilderness. I was utterly taken with this beautiful book. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Farzana Akhter</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I’ve mentioned a not-so-insignificant life detail that I’ve started writing poetry again, and this collection has truly inspired me to keep at it. You may have read the title poem somewhere on the Internet—it’s had some viral moments and for good reason, it’s stunningly beautiful and heart-wrenchingly true. Many of the poems are wrapped around the gravity of motherhood, grappling with what to tell our children (and ourselves) about the world. From looking for deer, remembering childbirth, to choosing where to make a home, read it, read it, read it. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tonny Saha</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>A December Instagram poll about Jane Austen novels led me to Persuasion, the overwhelming favorite. In the week between Christmas and New Year’s I tucked myself into bed each night with this slim and moving novel, and I’m so grateful for the recommendation. The first thing I kept thinking as I read: I can’t believe Jane Austen wrote this (and every other novel) by hand. The second thing I kept thinking: Oh, the heartache. The years lost. The sadness. And yet, the glimmer of hope that love stands the test of time and those meant to be together, will find each other no matter how many years have passed. I rooted for Anne and Frederick, and of course that letter he writes to her—and the entire scene itself—was everything I hoped it would be in the end.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Srayoshi Bashed Mirza</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Lydia and I were both invited to speak at the Napa Valley Book Fest last year, and while we were sitting next to each other chatting about maternity leave policies, we discovered our kids share the same birthday. But the book. I read it in a weekend and adored how she took us into the depths of a mother’s mind, describing the intimate routines of motherhood while also driving us along (literally) through a ten-day, life-changing road trip.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tahmid Rahman</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>The Little Red Kite is not only a beautiful little story but one so wonderfully illustrated. With a simple premise at its centre, the heart of this book is immense. A basic premise, the tone is happy and the rhyming flows off the tongue and so naturally throughout. This is a joy to read out loud but is also manageable enough</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Arif Hossain</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Surprising things happen every day in Moominvalley - luckily the Moomin family and their friends embrace the unexpected with their characteristic humour, kindness and charm. This beautiful book contains nine exciting adventure stories - all closely based on the warm and whimsical Moomin world and characters create</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Afreen Sultana</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/zahir.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Zahir Raihan</h3>
      </div>

      <div class="box">
         <img src="images/william.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>William Shakespeare</h3>
      </div>

      <div class="box">
         <img src="images/Humayun.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Humayun Ahmed</h3>
      </div>

      <div class="box">
         <img src="images/J.K Rowling.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>J.K Rowling</h3>
      </div>

      <div class="box">
         <img src="images/jafor.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jafor Iqbal</h3>
      </div>

      <div class="box">
         <img src="images/rabi.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rabindhranath Tagore</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>