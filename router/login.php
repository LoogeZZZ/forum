<?php
require_once __DIR__.'/../boot.php';
?>
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
<form action="do_login.php" method="post">
  <div class="container">
    <label for="username" class="usr"><b>Username</b></label>
    <input class="Loginname"type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="password" class="pswd"><b>Password</b></label>
    <input class="Loginpassword"type="password" placeholder="Enter Password" name="password" id="password" required>

    <button type="submit">Login</button>
    <?php flash() ?>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  </div>
</form>
</body>
</html>