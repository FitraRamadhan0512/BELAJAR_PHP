<?php
    require('dtlogin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">  
        <form method="post">
            <h1>LOGIN</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" id="username" required>
                <label for="password">
                    <input type="password" name="password" placeholder="Password" id="password" required>
                </label>
            </div>
            <div class="bt-login">
                <button type="submit" name="login" id="buttons">Login</button>
            </div>
            <div class="bt-register">
                <p>Don't Have an Account?<a href="registrasi.php"> Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>