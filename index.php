<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Electric Bill Generator</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Log in</h2>
  </div>
  <form action="" method="post">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
    <button type="submit" name="login" class="btn">Login</button>
    </div>
    <p>Haven't registered yet?<a href="register.php">Sign up</a></p>

  </form>
</body>
</html>