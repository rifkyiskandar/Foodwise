<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="{{asset("css/akun.css")}}">
<body>
    <header>
        <div class="header-left">
            <img src="profile.jpg" alt="Profile Picture" class="profile-pic">
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
        <section class="profile-header">
            <img src="profile-pic.jpg" alt="Rifky" class="profile-header-pic">
            <div class="profile-info">
                <h1>Rifky</h1>
                <p>Rifky@gmail.com</p>
            </div>
            <button class="edit-btn">Edit</button>
        </section>
        <section class="profile-form">
            <form>
                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" placeholder="Your First Name">
                </div>
                <div class="form-group">
                    <label for="nick-name">Nick Name</label>
                    <input type="text" id="nick-name" placeholder="Your First Name">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" id="gender" placeholder="Your First Name">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" placeholder="Your First Name">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" id="language" placeholder="Your First Name">
                </div>
                <div class="form-group">
                    <label for="time-zone">Time Zone</label>
                    <input type="text" id="time-zone" placeholder="Your First Name">
                </div>
            </form>
        </section>
        <section class="email-section">
            <h2>My email Address</h2>
            <div class="email-entry">
                <img src="email-icon.png" alt="Email Icon" class="email-icon">
                <div>
                    <p>Rifky@gmail.com</p>
                    <p>1 month ago</p>
                </div>
            </div>
            <button class="add-email-btn">+Add Email Address</button>
        </section>
    </main>
</body>
</html>
