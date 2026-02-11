
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KWA BONGE</title>
    <link rel="stylesheet" href="css/footer.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background-color: #FBF7F4;
    color: #3E2723;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 80px;
    background-color: #C05000;
}

.logo {
    font-size: 22px;
    font-weight: bold;
    color: #fff;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 30px;
}

.nav-links a {
    text-decoration: none;
    color: white;
    font-size: 15px;
    transition: 0.3s;
}

.nav-links a:hover {
    color: #FFB84D;
    font-weight: bold;
}

.nav-right {
    display: flex;
    align-items: center;
    gap: 20px;
    color: white;
}

.login-btn {
    padding: 10px 20px;
    border-radius: 20px;
    border: 2px solid white;
    background: transparent;
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

.login-btn:hover {
    background-color: #FFB84D;
    color: #3E2723;
    border-color: #FFB84D;
}

/* Hero Section */
.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 80px;
}

.hero-text {
    max-width: 500px;
}

.hero-text h1 {
    font-size: 60px;
    line-height: 1.1;
    margin-bottom: 20px;
}

.hero-text p {
    font-size: 16px;
    margin-bottom: 30px;
    color: #666;
}

.cta-btn {
    background-color: #C05000;
    border: none;
    padding: 12px 30px;
    border-radius: 25px;
    font-size: 16px;
    cursor: pointer;
    font-weight: bold;
    color: white;
    transition: 0.3s;
}

.cta-btn:hover {
    background-color: #FFB84D;
    color: #3E2723;
}

/* Hero Image */
.hero-image img {
    width: 450px;
    border-radius: 30px;
}

    </style>

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo"><b> KWA BONGE RESTAURANT</b></div>

        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="login.php">Menu</a></li>
            <li><a href="foods.php">Foods available</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>

        <div class="nav-right">
            <button class="login-btn"><a href="login.php">Login</a></button>
            <button class="login-btn"><a href="register.php">Register</a></button>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>Delicious<br>food at your<br>doorstep<br>KARIBU!!</h1>
            <p>
                Our mission is to connect food lovers with their favorite cuisines.
                Whether you're craving a quick bite or culinary adventures,
                we're here to inspire your next meal.
            </p>

            <button class="cta-btn">Get Started</button>
        </div>

        <div class="hero-image">
            <img src="6.jpg" alt="TAM TAM!">
        </div>
    </section>
    
</body>
</html>



