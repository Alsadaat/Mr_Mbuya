<style>
   * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
   }
   
   .footer {
      background: linear-gradient(135deg, #3E2723 0%, #2D1F1A 100%);
      color: #E8D7CE;
      padding: 60px 80px 30px 80px;
      margin-top: 80px;
      border-top: 4px solid #C05000;
   }
   
   .footer .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 40px;
      max-width: 1200px;
      margin: 0 auto 40px;
   }
   
   .footer .box {
      text-align: left;
   }
   
   .footer .box img {
      width: 50px;
      height: 50px;
      margin-bottom: 15px;
      filter: brightness(0) invert(1);
      transition: 0.3s;
   }
   
   .footer .box img:hover {
      filter: brightness(0) invert(1) drop-shadow(0 0 5px #C05000);
   }
   
   .footer .box h3 {
      font-size: 18px;
      color: #FFB84D;
      margin-bottom: 12px;
      text-transform: capitalize;
      font-weight: bold;
   }
   
   .footer .box a {
      color: #E8D7CE;
      text-decoration: none;
      font-size: 15px;
      line-height: 1.8;
      display: block;
      transition: 0.3s;
   }
   
   .footer .box a:hover {
      color: #FFB84D;
      padding-left: 10px;
   }
   
   .footer .credit {
      margin-top: 30px;
      padding-top: 20px;
      text-align: center;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 14px;
      color: #B0959F;
   }
   
   .footer .credit span {
      color: #FFB84D;
      font-weight: bold;
   }
   
   @media (max-width: 768px) {
      .footer {
         padding: 40px 20px 25px;
      }
      
      .footer .grid {
         grid-template-columns: 1fr;
         gap: 25px;
      }
      
      .footer .box {
         text-align: center;
      }
      
      .footer .box img {
         margin: 0 auto 15px;
      }
      
      .footer .box a {
         text-align: center;
      }
      
      .footer .box a:hover {
         padding-left: 0;
      }
      
      .footer .credit {
         font-size: 13px;
      }
   }
</style>
<footer class="footer">
<section class="grid">
     <div class="box">
  <h3>our email</h3>
  <a href="frankfredrick27@gmail.com">Frank@CBE.com</a>
  </div>
      <div class="box">
         <img src="images/map-icon.png" alt="">
         <h3>Our address</h3>
         <a href="#">Kisutu, Dar es salaam, TZ</a>
      </div>
      <div class="box">
         <h3>our number</h3>
         <a href="tel:+255623324218">+255623324218</a>
      </div>
   </section>
   <div class="credit">&copy; copyright @ <?= date('Y'); ?> by <span>FRANK B FREDERICK</span> <br>
   | all rights reserved!</div>
</footer>

