<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/661139e681.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
</head>
<body class="Login">
<form action="action_page.php" method="post">
  <div class="container">
    <label for="uname" class="usr"><b>Username</b></label>
    <input class="Loginname"type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw" class="pswd"><b>Password</b></label>
    <input class="Loginpassword"type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  </div>
</form>
</body>
</html>