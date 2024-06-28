<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifky's Blog</title>
    <link rel="stylesheet" href="{{asset("css/forum2.css")}}">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="profile-pic.jpg" alt="Profile Picture" class="profile-pic">
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
        <div class="main-content">
            <img src="assets/forum1.png" class="food-image">
            <p class="article-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua orem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua

            </p>
        </div>

        <div class="comments-section">
            <h2>Comments</h2>

            <div class="comment">
                <div class="comment-header">
                    <img src="orang1.png" alt="User 1" class="comment-pic">
                    <div class="comment-details">
                        <span class="username">maxblagun</span>
                        <span class="time">2 weeks ago</span>
                        <a href="#" class="reply-link">Reply</a>
                    </div>
                </div>
                <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>

            <div class="comment reply">
                <div class="comment-header">
                    <img src="user2.jpg" alt="User 2" class="comment-pic">
                    <div class="comment-details">
                        <span class="username">ramsesmiron</span>
                        <span class="time">1 week ago</span>
                        <a href="#" class="reply-link">Reply</a>
                    </div>
                </div>
                <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>

            <div class="comment reply">
                <div class="comment-header">
                    <img src="profile-pic.jpg" alt="Rifky" class="comment-pic">
                    <div class="comment-details">
                        <span class="username">Rifky</span>
                        <span class="time">2 days ago</span>
                        <a href="#" class="delete-link">Delete</a>
                        <a href="#" class="edit-link">Edit</a>
                    </div>
                </div>
                <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>

            <div class="add-comment">
                <img src="profile-pic.jpg" alt="Your Profile" class="comment-pic">
                <textarea placeholder="Add a comment..."></textarea>
                <button class="send-button">Send</button>
            </div>
        </div>
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
