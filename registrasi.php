<?php
    require('dtregis.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registrasi.css">
</head>
<body>
    <div class="wrapper">  
        <form method="post">
            <h1>REGISTER</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" id="username" required>
                <label for="password">
                    <input type="password" name="password" placeholder="Password" id="password" required>
                </label>
                <label for="password2">
                    <input type="password" name="password2" placeholder="Confirm Password" id="password2" required>
                </label>
            </div>
            <div class="bt-login">
                <button type="submit" name="register" id="buttons">Register</button>
            </div>
            <div class="bt-register">
                <p>Already Have an Account?<a href="login.php"> Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>