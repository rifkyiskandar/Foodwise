{{-- {{asset("css/homepage.css")}} --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodWise</title>
    <link rel="stylesheet" href="{{asset("css/homepage.css")}}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/diet">Plans</a></li>
            <li><a href="/hitungkalori">Calculate Calories</a></li>
            <li><a href="/forum">Community</a></li>
            <li><a href="/home">About</a></li>
            <li><a href="/akun">Account</a></li>
        </ul>
    </nav>

    <header class="header">
        <div class="header-content">
            <h1 class="logo">FoodWise</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search for the food you want to count">
                <button class="camera-icon">&#128247;</button>
            </div>
        </div>
    </header>

    <section class="about-section">
        <h2>About</h2>
        <div class="about-content">
            <div class="about-box">
                <h3>Mission</h3>
                <p>At FoodWise, we are a diverse team of nutritionists, tech enthusiasts, and health advocates who are passionate about food and well-being. We believe that everyone deserves access to reliable and easy-to-understand information that supports a balanced diet and promotes overall health.</p>
            </div>
            <div class="about-box">
                <h3>Vision</h3>
                <p>We envision a world where everyone has the confidence and knowledge to make healthier food choices, leading to a society with better health outcomes and a deeper understanding of the importance of nutrition.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-links">
            <a href="#">About</a>
            <a href="#">Careers</a>
            <a href="#">Press</a>
            <a href="/home">Customer Care</a>
            <a href="/home">Services</a>
        </div>
        <div class="footer-email">
            <input type="email" placeholder="Your email address">
            <button>Send</button>
        </div>
        <div class="footer-bottom">
            <p>Terms & Conditions | Privacy Policy | Accessibility | Legal</p>
            <p>Design with love by FoodWise Studio 2024. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

