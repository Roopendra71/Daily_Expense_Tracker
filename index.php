<?php
session_start();
if(isset($_SESSION['user_id'])){
    header('Location: dashboard.php'); exit;
}
$error = isset($_GET['error']) ? $_GET['error'] : '';
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="static/css/styles.css">
</head>

<body>
  <div class="center-card">
    <h2>Daily Expenses Tracker</h2>
    <?php if($error): ?>
    <p class="error">
      <?=htmlspecialchars($error)?>
    </p>
    <?php endif; ?>
    <?php if($msg): ?>
    <p class="msg">
      <?=htmlspecialchars($msg)?>
    </p>
    <?php endif; ?>
    <form method="post" action="api/login.php">
      <label>Username</label><input name="username" required value="">
      <label>Password</label><input name="password" type="password" required value="">
      <button type="submit">Login</button>
    </form>
    <!-- <p>Demo: <strong>demo / demo123</strong></p> -->
    <p><a href="register.php">Register</a></p>
  </div>
</body>

</html>