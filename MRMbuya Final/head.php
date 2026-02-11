<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<style>
   * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
   }
   
   .header {
      background: #C05000;
      padding: 15px 80px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
   }
   
   .header .flex {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
   }
   
   .header .logo {
      font-size: 22px;
      font-weight: bold;
      color: white;
      text-decoration: none;
      text-transform: uppercase;
      letter-spacing: 2px;
      transition: 0.3s;
   }
   
   .header .logo:hover {
      color: #FFB84D;
   }
   
   .header .navbar {
      display: flex;
      gap: 30px;
      flex: 1;
      justify-content: center;
   }
   
   .header .navbar a {
      color: white;
      text-decoration: none;
      font-size: 15px;
      text-transform: capitalize;
      transition: 0.3s;
      padding: 8px 12px;
      position: relative;
   }
   
   .header .navbar a:hover {
      color: #FFB84D;
      font-weight: bold;
   }
   
   .header .navbar a::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: #FFB84D;
      transition: width 0.3s;
   }
   
   .header .navbar a:hover::after {
      width: 100%;
   }
   
   .header .icons {
      display: flex;
      gap: 20px;
      align-items: center;
   }
   
   .header .icons a,
   .header .icons div {
      color: white;
      font-size: 18px;
      cursor: pointer;
      transition: 0.3s;
   }
   
   .header .icons a:hover,
   .header .icons div:hover {
      color: #FFB84D;
      transform: scale(1.1);
   }
   
   #menu-btn {
      display: none;
      font-size: 25px;
   }
   
   .header .profile {
      position: absolute;
      top: 100%;
      right: 80px;
      background: white;
      border-radius: 10px;
      padding: 20px;
      width: 300px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      display: none;
      z-index: 1001;
   }
   
   .header .profile.active {
      display: block;
   }
   
   .header .profile .flex {
      flex-direction: column;
      gap: 10px;
      margin: 10px 0;
   }
   
   .header .profile .name {
      color: #3E2723;
      font-weight: bold;
      margin-bottom: 10px;
   }
   
   .header .profile .account {
      color: #666;
      font-size: 14px;
      margin: 10px 0;
   }
   
   .header .profile .account a {
      color: #C05000;
      text-decoration: none;
      font-weight: bold;
   }
   
   .header .profile .btn {
      background: #C05000;
      color: white;
      padding: 8px 16px;
      border-radius: 6px;
      text-decoration: none;
      text-align: center;
      transition: 0.3s;
      display: inline-block;
      border: none;
      cursor: pointer;
      font-size: 14px;
   }
   
   .header .profile .btn:hover {
      background: #FFB84D;
      color: #3E2723;
   }
   
   .header .profile .delete-btn {
      background: #D32F2F;
      color: white;
      padding: 8px 16px;
      border-radius: 6px;
      text-decoration: none;
      text-align: center;
      transition: 0.3s;
      display: inline-block;
      border: none;
      cursor: pointer;
      font-size: 14px;
   }
   
   .header .profile .delete-btn:hover {
      background: #B71C1C;
   }
   
   @media (max-width: 768px) {
      .header {
         padding: 15px 20px;
      }
      
      .header .flex {
         gap: 10px;
      }
      
      .header .logo {
         font-size: 18px;
         letter-spacing: 1px;
      }
      
      .header .navbar {
         display: none;
      }
      
      #menu-btn {
         display: block;
      }
      
      .header .profile {
         right: 20px;
         width: 250px;
      }
      
      .header .icons {
         gap: 10px;
      }
      
      .header .icons a,
      .header .icons div {
         font-size: 16px;
      }
   }
</style>
<header class="header">

   <section class="flex">

      <a href="index.php" class="logo">BONGE RESTAURANT</a>

      <nav class="navbar">
         <a href="index.php">Home</a>
         <a href="about.php">About</a>
         <a href="login.php">Menu</a>
         <a href="foods.php">Available Foods</a>
         <a href="contact.php">Contact</a>
      </nav>

      <div class="icons">
        

         <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <p class="name"></p>
         <div class="flex">
            <a href="profile.php" class="btn">profile</a>
            <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
         </div>
         <p class="account">
            <a href="login.php">login</a> or
            <a href="register.php">register</a>
         </p> 
            <p class="name">please login first!</p>
            <a href="login.php" class="btn">login</a>
      </div>

   </section>

</header>
