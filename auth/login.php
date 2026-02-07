<?php
session_start();
include __DIR__ . "/../includes/db.php";

if (isset($_POST['submit'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM registration WHERE email='$email'";
  $res = mysqli_query($conn, $sql);

  if ($res && mysqli_num_rows($res) == 1) {

    $user = mysqli_fetch_assoc($res);

    if (password_verify($password, $user['password'])) {

      // ✅ SESSION DATA
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['user_name'] = $user['firstName'];
      $_SESSION['user_email'] = $user['email'];

      header("Location: /parking/index.php");
      exit;
    } else {
      echo "Invalid password";
    }
  } else {
    echo "Invalid email";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/parking/assets/CSS/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>
  <!-- Navbar Include -->
  <?php include __DIR__ . "/../includes/header.php"; ?>

  <div class="login-card">

    <div class="login-container">
      <h2>Login</h2>

      <form action="#" method="post">

        <div class="input-group">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" required>
        </div>

        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" name="submit">Login</button>

        <p class="signup">New User ?<a href="./Signup.php">Register Here</a> </p>
      </form>
    </div>

  </div>
</body>

</html>