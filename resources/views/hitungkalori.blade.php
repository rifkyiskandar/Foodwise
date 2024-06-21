<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Entry</title>
    <link rel="stylesheet" href="{{asset("css/hitungkalori.css")}}">
</head>
<body>
    <header>
        <div class="header-left">
            <img src="profile-pic.jpg" alt="Profile Picture" class="profile-pic">
            <span>Rifky</span>
        </div>
        <nav>
            <a href="#">Account</a>
            <a href="#">Plans</a>
            <a href="#">Calculate Calories</a>
            <a href="#">Community</a>
            <a href="#">About</a>
            <a href="#">Home</a>
        </nav>
    </header>
    <main>
        <h1>Food Entry</h1>
        <table>
            <thead>
                <tr>
                    <th>Food</th>
                    <th>Qty</th>
                    <th>Unit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rice</td>
                    <td><input type="text" value="100"></td>
                    <td>GR</td>
                </tr>
                <tr>
                    <td>Tempe</td>
                    <td><input type="text" value="1"></td>
                    <td>PCS</td>
                </tr>
                <tr>
                    <td>Tahu</td>
                    <td><input type="text" value="1"></td>
                    <td>PCS</td>
                </tr>
                <tr>
                    <td>Chiken</td>
                    <td><input type="text" value="1"></td>
                    <td>PCS</td>
                </tr>
                <tr>
                    <td>Cucumber</td>
                    <td><input type="text" value="2"></td>
                    <td>PCS</td>
                </tr>
            </tbody>
        </table>
        <button class="add-food-btn">+ Add New Food</button>
        <div class="upload-section">
            <button class="upload-btn">Upload Image</button>
            <img src="food-image.jpg" alt="Food Image" class="food-image">
        </div>
        <button class="next-btn">Next</button>
    </main>
    <footer>
        <div class="footer-left">
            <img src="logo.png" alt="FoodWise Logo" class="logo">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">Customer Care</a></li>
                <li><a href="#">Services</a></li>
            </ul>
        </div>
        <div class="footer-right">
            <p>Contact Us With Email</p>
            <input type="email" placeholder="Your email address...">
            <button class="send-btn">Send</button>
        </div>
    </footer>
</body>
</html>
