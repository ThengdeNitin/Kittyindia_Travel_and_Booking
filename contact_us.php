<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assetes/CSS/contact_us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
<body>
   <?php
include "header.php";

?>

<div class="main_container">
        <div class="card text-white">
            <img src="assetes/home/back.jpg" class="card-img" alt="..." style="width:100%;height:400px;">
            <div class="card-img-overlay">
            <!-- <h1 class="card-title contact_text ">Contact us</h1> -->
            <div class="container2">
               <h2 class="title title1">
                 <span class="title-word title-word-1">CONTACT</span>
                 <span class="title-word title-word-2">US</span>
               </h2>
            </div>
             <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional</p>
            <p class="card-text">Last updated 3 mins ago</p> -->
           </div>
       </div>
</div>

<div class="container1">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">GET IN TOUCH</div>
        <div class="topic-text1">CONTACT US</div>
        <p>If you are planning to go on a tour of Trivandrum Kanyakumari Rameswaram, then you have come to the right place. At Kanyakumari Travels, we offer a wide range of packages for this destination. Whether it is a honeymoon trip or an adventure vacation, we will help you make your dream come true.</p>
      <form action="save_contact.php" method="post">
        <div class="input-box">
          <input type="text" name="customer_name" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" name="customer_email" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <input type="text" name="customer_message" placeholder="Your Message Here">
        </div>
        <div class="button">
          <button class="btn btn-lg  btn-success">Submit</button>
        </div>
      </form>
    </div>
    </div>
  </div>









<?php
include "footer.php";

?> 
</body>
</html>