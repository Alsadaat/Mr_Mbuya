
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us - Kwa Bonge Restaurant</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
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
      .contact {
         padding: 60px 80px;
         max-width: 1200px;
         margin: 0 auto;
      }
      .contact .row {
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 40px;
         align-items: center;
      }
      .contact .image img {
         width: 100%;
         border-radius: 10px;
         box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      }
      .contact form h3 {
         color: #C05000;
         font-size: 28px;
         margin-bottom: 25px;
         text-transform: capitalize;
      }
      .contact .box {
         width: 100%;
         padding: 12px;
         margin-bottom: 15px;
         border: 2px solid #DDD;
         border-radius: 6px;
         font-size: 15px;
         background: white;
         color: #3E2723;
         transition: 0.3s;
         font-family: Arial, sans-serif;
      }
      .contact .box:focus {
         outline: none;
         border-color: #C05000;
         box-shadow: 0 0 10px rgba(192, 80, 0, 0.2);
      }
      .contact textarea {
         resize: vertical;
      }
      .btn {
         display: inline-block;
         padding: 12px 30px;
         border-radius: 25px;
         background: #C05000;
         color: white;
         text-decoration: none;
         border: none;
         cursor: pointer;
         font-weight: bold;
         font-size: 15px;
         transition: 0.3s;
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
         .contact {
            padding: 40px 20px;
         }
         .contact .row {
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
   <h3>contact us</h3>
   <p><a href="home.php">home</a> <span> / contact</span></p>
</div>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <h3>tell us something!</h3>
         <input type="text" name="name" maxlength="50" class="box" placeholder="enter your name" required>
         <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="enter your number" required maxlength="10">
         <input type="email" name="email" maxlength="50" class="box" placeholder="enter your email" required>
         <textarea name="msg" class="box" required placeholder="enter your message" maxlength="500" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>

   </div>

</section>

<?php include 'footer.php'; ?>