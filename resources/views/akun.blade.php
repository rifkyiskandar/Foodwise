<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="{{asset("css/akun.css")}}">
</head>
<body>
    <div class="header">
        <h1>Rifky</h1>
        <nav>
            <a href="/akun">Account</a>
            <a href="/diet">Plans</a>
            <a href="/hitungkalori">Calculate Calories</a>
            <a href="/forum">Community</a>
            <a href="/home">About</a>
            <a href="/home">Home</a>
        </nav>
    </div>
    <div class="profile-container">
        <div class="profile-header">
            <!-- Replace 'profile.jpg' with the path to your desired profile image -->
            <img src="assets/profile.png" alt="Profile Picture" class="profile-picture">
            <div class="profile-picture">
                <h2>Rifky</h2>
                <p>Rifky@gmail.com</p>
            </div>
            <button class="edit-button">Edit</button>
        </div>
        <form class="profile-form">
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
                <select id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" id="country" placeholder="Your First Name">
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <select id="language">
                    <option value="Indonesia">Indonesia</option>
                    <option value="English">English</option>
                    <option value="Japan">Japan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="time-zone">Time Zone</label>
                <select id="time-zone">
                    <option value="Jakarta (GMT+7)">Jakarta (GMT+7)</option>
                    <option value="Bandung (GMT+7)">Bandung (GMT+7)</option>
                    <option value="Bogor (GMT+7)">Bogor (GMT+7)</option>
                </select>
            </div>
        </form>
        <div class="email-section">
            <h3>My Email Address</h3>
            <p>Rifky@gmail.com</p>
            <p>1 month ago</p>
            <button class="add-email-button">+ Add Email Address</button>
        </div>
    </div>
</body>
</html>
