<?php include 'head.php'; ?>
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
   .h1 {
      background: linear-gradient(135deg, #C05000 0%, #D2691E 100%);
      padding: 60px 20px;
      color: white;
      text-align: center;
      margin-bottom: 40px;
   }
   .h1 h1 {
      font-size: 42px;
      margin: 0;
      text-transform: capitalize;
      letter-spacing: 1px;
   }
   .container {
      position: relative;
      min-height: 100vh;
      padding: 40px 20px;
   }
   .image-container {
        width: 95%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        gap: 20px;
        justify-items: center;
        align-items: center;
   }
   .image {
      flex: 1 1 220px;
      min-width: 200px;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(192, 80, 0, 0.15);
      transition: transform 0.3s;
   }
   .image:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 25px rgba(192, 80, 0, 0.25);
   }
   .image img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      display: block;
   }
   @media (max-width: 768px) {
         .h1 h1 {
            font-size: 28px;
         }
         .image-container {
            grid-template-columns: 1fr;
            grid-template-rows: repeat(6, 1fr);
         }
         .image {
            min-width: 150px;
         }
         .image img {
            height: 180px;
         }
   }
</style>
<div class="h1">
   <h1>OUR FOODS (Vyakula vyetu vitamu)</h1>
</div><br>
<div class="container">
	
   <div class="image-container">
      <div class="image"><img src="OIP.jfif" alt="Food 1"></div>
      <div class="image"><img src="1.jpg" alt="Food 2"></div>
      <div class="image"><img src="2.jpg" alt="Food 3"></div>
      <div class="image"><img src="3.jpg" alt="Food 4"></div>
      <div class="image"><img src="4.jpg" alt="Food 5"></div>
      <div class="image"><img src="5.jpg" alt="Food 6"></div>
      <div class="image"><img src="6.jpg" alt="Food 6"></div>
      <div class="image"><img src="7.jpg" alt="Food 6"></div>
   </div>
	
</div>

<?php include 'footer.php'; ?>