<?php session_start(); if(isset($_SESSION['user_id'])){ header('Location: dashboard.php'); exit; } $error = isset($_GET['error']) ? $_GET['error'] : ''; ?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="static/css/styles.css">
</head>

<body>
  <div class="center-card">
    <h2>Register</h2>
    <?php if($error): ?>
    <p class="error">
      <?=htmlspecialchars($error)?>
    </p>
    <?php endif; ?>
    <form method="post" action="api/register.php">
      <label>Username</label><input name="username" required>
      <label>Password</label><input name="password" type="password" required>
      <label>Confirm</label><input name="password2" type="password" required>
      <button type="submit">Register</button>
    </form>
    <p><a href="index.php">Back to login</a></p>
  </div>
</body>

</html>