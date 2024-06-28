<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Food Planning</title>
    <link rel="stylesheet" href="{{asset("css/diet.css")}}">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="profile">
                <img src="/image.png" alt="Profile Picture">
                <span>Rifky</span>
            </div>
            <nav>
                <ul>
                    <li><a href="/akun">Account</a></li>
                    <li><a href="/diet">Plans</a></li>
                    <li><a href="/hitungkalori">Calculate Calories</a></li>
                    <li><a href="/forum">Community</a></li>
                    <li><a href="/home">About</a></li>
                    <li><a href="/home">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <h1>Your Food Planning</h1>
        <div class="content">
            <div class="identitas">
                <h2>Identitas</h2>
                <label for="age">Age</label>
                <input type="text" id="age" placeholder="Input Your Age">
                <label for="weight">Weight</label>
                <input type="text" id="weight" placeholder="Input Your Weight">
                <label for="tall">Tall</label>
                <input type="text" id="tall" placeholder="Input Your Tall">
                <label for="gender">Gender</label>
                <input type="text" id="gender" placeholder="Input Your Tall">
            </div>
            <div class="target">
                <h2>Your Target</h2>
                <button>LOSS WEIGHT</button>
                <button>GAIN WEIGHT</button>
                <button>STAY FIT & HEALTHY</button>
            </div>
        </div>
        <button class="next">NEXT</button>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <span>FoodWise</span>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Customer Care</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <form>
                    <label for="email">Contact Us With Email</label>
                    <input type="email" id="email" placeholder="Your email address...">
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <span>Terms & Conditions | Privacy Policy | Accessibility | Legal</span>
            <span>Design with love @ FoodWise Studio 2024. All rights reserved</span>
        </div>
    </footer>
</body>
</html>
