<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="background">
        <div class="login-container">
            <h2>LOGIN</h2>
            <form action="/home" method="get">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username / Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-links">
                    <a href="/regist">Registration</a>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
