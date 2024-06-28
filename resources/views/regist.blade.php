<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{asset("css/regist.css")}}">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>REGISTRATION</h1>
            <form action="/login">
                <input type="text" placeholder="Nama / Username" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <input type="password" placeholder="Re -Password" required>
                <a href="#">Login</a>
                <button type="submit">Regist</button>
            </form>
        </div>
    </div>
</body>
</html>
