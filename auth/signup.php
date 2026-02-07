<?php
include __DIR__ . "/../includes/db.php";

if (isset($_POST['submit'])) {

  $firstName = $_POST['firstname'];
  $lastName  = $_POST['lastname'];
  $number    = $_POST['number'];
  $email     = $_POST['email'];
  $password  = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $vehicleType  = $_POST['vehicleType'];
  $vehicleColor = $_POST['vehicleColor'];
  $plateNumber  = $_POST['plateNumber'];

  $sql = "INSERT INTO registration
    (firstName, lastName, number, email, password, vehicleType, vehicleColor, plateNumber)
    VALUES
    ('$firstName','$lastName','$number','$email','$password','$vehicleType','$vehicleColor','$plateNumber')";

  if (mysqli_query($conn, $sql)) {
    echo "Registration Successful";
  } else {
    echo "Failed";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup - Parking Management System</title>

  <link rel="stylesheet" href="/parking/assets/CSS/signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>
  <!-- Navbar Include -->
  <?php include __DIR__ . "/../includes/header.php"; ?>

  <div class="signup-card">
    <div class="signup-container">
      <h2>Create Account</h2>

      <form action="#" method="post">
        <div class="form-row">
          <div class="input-group">
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required>
          </div>

          <div class="input-group">
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required>
          </div>
        </div>

        <div class="form-row">
          <div class="input-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>
          </div>

          <div class="input-group">
            <label for="number">Number</label>
            <input type="text" id="number" name="number" placeholder="Enter your 10 digit num" required>
          </div>
        </div>


        <div class="form-row">
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Create a password" required>
          </div>
          <div class="input-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
          </div>

        </div>

        <div class="form-row">
          <div class="input-group">
            <label for="vehicle_type">Vehicle Type</label>
            <select id="vehicle_type" name="vehicleType" required>
              <option value="">Select Vehicle Type</option>
              <option value="Car">Car</option>
              <option value="Bike">Bike</option>
              <option value="Scooter">Scooter</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="input-group">
            <label for="vehicle_color">Vehicle Color</label>
            <input type="text" id="vehicleColor" name="vehicleColor" placeholder="e.g., Red, Black" required>
          </div>
          <div class="input-group">
            <label for="plate_number">Plate Number</label>
            <input type="text" id="plate_number" name="plateNumber" placeholder="Enter plate number" required>
          </div>
        </div>

        <button type="submit" name="submit">Sign Up</button>
        <p class="login">Already have an account? <a href="login.php">Login Here</a></p>
      </form>

    </div>
  </div>




</body>

</html>