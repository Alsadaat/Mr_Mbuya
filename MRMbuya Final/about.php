<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us - Kwa Bonge Restaurant</title>
   <link rel="stylesheet" href="css/footer.css">
   <style>
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }
      body {
         font-family: Arial, Helvetica, sans-serif;
         background-color: #FBF7F4;
         color: #3E2723;
      }
      .heading {
         background: linear-gradient(135deg, #C05000 0%, #D2691E 100%);
         padding: 60px 80px;
         color: white;
         text-align: center;
         margin-bottom: 40px;
      }
      .heading h3 {
         font-size: 42px;
         margin-bottom: 15px;
         text-transform: capitalize;
      }
      .heading p {
         font-size: 16px;
      }
      .heading a {
         color: #FFB84D;
         text-decoration: none;
      }
      .heading span {
         color: #E8D7CE;
      }
      .about {
         padding: 60px 80px;
         max-width: 1200px;
         margin: 0 auto;
      }
      .about .row {
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 40px;
         align-items: center;
      }
      .about .image img {
         width: 100%;
         border-radius: 10px;
         box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      }
      .about .content h3 {
         color: #C05000;
         font-size: 24px;
         margin-bottom: 15px;
         margin-top: 20px;
      }
      .about .content p {
         line-height: 1.8;
         font-size: 15px;
         margin-bottom: 15px;
         color: #555;
      }
      .about .content li {
         line-height: 1.8;
         font-size: 15px;
         margin-bottom: 10px;
         color: #555;
         list-style: none;
         padding-left: 20px;
      }
      .about .content li:before {
         content: "✓ ";
         color: #C05000;
         font-weight: bold;
         margin-right: 8px;
      }
      .btn {
         display: inline-block;
         padding: 12px 30px;
         border-radius: 25px;
         background: #C05000;
         color: white;
         text-decoration: none;
         margin-top: 20px;
         transition: 0.3s;
         font-weight: bold;
      }
      .btn:hover {
         background: #FFB84D;
         color: #3E2723;
      }
      @media (max-width: 768px) {
         .heading {
            padding: 40px 20px;
         }
         .heading h3 {
            font-size: 28px;
         }
         .about {
            padding: 40px 20px;
         }
         .about .row {
            grid-template-columns: 1fr;
            gap: 20px;
         }
      }
   </style>
</head>
<body>
   
<!-- header section starts  -->
<?php include 'head.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="index.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Our platform ensures quick order processing and timely delivery, so customers recieve their meals fresh and on time without unneccessary delays</p>
         <h3>Our Vision</h3>
         <p>To become a leading home-style restaurant known for quality, warmth, and unforgettable flavors — creating moments that bring people together around great food.</p>
                  <h3>Our Mission</h3>
         <p><li><i> serve fresh, high-quality meals made with passion and care.</li>
                <li> create a welcoming and comfortable dining experience for everyone.</li>
                <li>To maintain consistency in taste, hygiene, and customer satisfaction.</li>
                <li>To grow while staying true to our home-style roots and golden standards.</i>
            </li>\
         </p>
         

         <a href="menu.html" class="btn">our menu</a>
         
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>
