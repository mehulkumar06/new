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
   <link rel="stylesheet" href="user_styles.css">

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
         <img src="about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>There are several reasons why someone might choose a particular website for buying books. Here are some factors that can make a website stand out and be a preferred choice for book shoppers:

1. Wide Selection: A good book website should offer a vast and diverse selection of books across different genres and categories. Customers want to find both popular and niche titles.

2. User-Friendly Interface: A user-friendly website with easy navigation, search features, and filters can make the book shopping experience more enjoyable and efficient.

3. Reviews and Ratings: Websites that provide customer reviews and ratings for books help potential buyers make informed decisions about their purchases.

4. Competitive Pricing: Fair and competitive pricing is essential. Customers appreciate discounts, sales, and options for both new and used books.

5. Recommendation Systems: A good book website should offer personalized book recommendations based on a user's past purchases or browsing history.

6. Customer Service: Responsive and helpful customer service can set a website apart. Customers may have questions about products, orders, or technical issues, and it's important to have support available.

7. Shipping Options: Fast and reliable shipping options are crucial, and some customers may appreciate free shipping or options for expedited delivery.

8. Return Policy: A transparent and fair return policy is important for customer confidence. It allows buyers to return books that may not meet their expectations.

9. Security and Privacy: Shoppers want to know that their personal information and payment details are secure when making online purchases.

10. Community and Content: Some websites foster a sense of community among book enthusiasts by offering forums, blogs, or additional content related to books and reading.

11. Accessibility and Mobile-Friendliness: The website should be accessible and easy to use on different devices, including smartphones and tablets.

12. Special Features: Unique features, such as book clubs, author interviews, or exclusive editions, can make a website more enticing.

13. Local and International Reach: Depending on your location, you may prefer websites with a strong local presence or those that can ship internationally.

14. Trustworthiness: Reputable websites with a history of providing quality service and genuine products tend to inspire more trust.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>

