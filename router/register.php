<?php
require_once __DIR__.'/../boot.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Sign up</title>
</head>
<body class="Login">

    <form action="do_register.php" method="POST">
        <div class="container">
            <h1>Sign Up</h1>
            <?php flash(); ?>
            <label for="username"><b>Login</b></label>
            <input class="Loginname" type="text" placeholder="Enter Login" name="username" id="username" required>

            <label for="password"><b>Password</b></label>
            <input class="Loginpassword" type="password" placeholder="Enter Password" name="password" id="password" required>
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue" class="terms">Terms & Privacy</a>.</p>

            <div class="clearfix">
            <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</body>
</html>