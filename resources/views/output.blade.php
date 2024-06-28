<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodWise</title>
    <link rel="stylesheet" href="{{asset('css/output.css')}}">
</head>
<body>
    <header>
        <div class="profile">
            <img src="profile.jpg" alt="Profile Picture">
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
    </header>
    <main>
        <div class="search">
            <input type="text" placeholder="Search Here">
        </div>
        <div class="content">
            <div class="food-image">
                <img src="food.jpg" alt="Food Image" id="uploaded-food-image">
            </div>
            <div class="nutrition-info">
                <div class="nutrition">
                    <span>Protein</span>
                    <span>{{ $totalProtein }} Gram</span>
                </div>
                <div class="nutrition">
                    <span>Calories</span>
                    <span>{{ $totalCalories }} Kcal</span>
                </div>
                <div class="nutrition">
                    <span>Fat</span>
                    <span>{{ $totalFat }} Gram</span>
                </div>
                <div class="nutrition">
                    <span>Carbo</span>
                    <span>{{ $totalCarbohydrates }} Gram</span>
                </div>
            </div>
            <div class="create-own">
                <a href="/food"><span>Or Create Your Own Food Calculate</span></a>

            </div>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <span>About</span>
                <span>Careers</span>
                <span>Press</span>
                <span>Customer Care</span>
                <span>Services</span>
            </div>
            <div class="footer-right">
                <span>Contact Us With Email</span>
                <input type="email" placeholder="Your email address...">
                <button>Send</button>
            </div>
        </div>
        <div class="footer-bottom">
            <span>Terms & Conditions</span>
            <span>Privacy Policy</span>
            <span>Accessibility</span>
            <span>Legal</span>
        </div>
        <div class="footer-note">
            <span>Design with love by FoodWise Studios 2024. All right reserved</span>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const foodImage = localStorage.getItem('foodImage');
            if (foodImage) {
                document.getElementById('uploaded-food-image').src = foodImage;
            }
        });
    </script>
</body>
</html>
