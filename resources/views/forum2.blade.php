<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifky's Blog</title>
    <link rel="stylesheet" href="{{asset('css/forum2.css')}}">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="profile-pic.jpg" alt="Profile Picture" class="profile-pic">
            <nav>
                <ul>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">Plans</a></li>
                    <li><a href="#">Calculate Calories</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="main-content">
            <img src="food-image.jpg" alt="Food Image" class="food-image">
            <p class="article-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
        </div>
        <div class="comments-section">
            <h2>Comment</h2>
            <div class="comment">
                <div class="comment-header">
                    <img src="user1.jpg" alt="User 1" class="comment-pic">
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
        <div class="footer-content">
            <a href="#">About</a>
            <a href="#">Career</a>
            <a href="#">Privacy</a>
            <a href="#">Contact</a>
            <a href="#">Customer Care</a>
        </div>
    </footer>
</body>
</html>
