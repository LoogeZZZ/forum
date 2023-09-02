<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Sign up</title>
</head>
<body class="Login">
    <form action="action_page.php">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>

            <label for="email"><b>Login</b></label>
            <input class="Loginname" type="text" placeholder="Enter Login" name="text" required>

            <label for="psw"><b>Password</b></label>
            <input class="Loginpassword" type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input class="Loginpassword" type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue" class="terms">Terms & Privacy</a>.</p>

            <div class="clearfix">
            <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</body>
</html>