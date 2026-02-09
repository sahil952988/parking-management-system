<?php
session_start();
include __DIR__ . "/../includes/db.php";

if (!isset($_SESSION['user_email'])) {
  header("Location: login.php");
  exit;
}

$email = $_SESSION['user_email'];

$sql = "SELECT firstName, lastName, email, number, vehicleType, vehicleColor, plateNumber 
        FROM registration 
        WHERE email = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>My Profile | Parking Management</title>
  <link rel="stylesheet" href="/parking/assets/CSS/userPrfile.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

  <?php include __DIR__ . "/../includes/header.php"; ?>

  <div class="profile-wrapper">
    <div class="profile-info">

      <div class="head" style="display:flex; gap:10px;">
        <i style="font-size:20px;" class="fa-regular fa-user"></i>
        <h3>Profile Information</h3>
      </div>

      <div class="info-grid">

        <div class="info-box">
          <label>First Name</label>
          <p><?php echo htmlspecialchars($user['firstName']); ?></p>
        </div>

        <div class="info-box">
          <label>Last Name</label>
          <p><?php echo htmlspecialchars($user['lastName']); ?></p>
        </div>

        <div class="info-box">
          <label>Email</label>
          <p><?php echo htmlspecialchars($user['email']); ?></p>
        </div>

        <div class="info-box">
          <label>Phone</label>
          <p><?php echo htmlspecialchars($user['number']); ?></p>
        </div>

        <div class="info-box">
          <label>Vehicle Type</label>
          <p><?php echo htmlspecialchars($user['vehicleType']); ?></p>
        </div>

        <div class="info-box">
          <label>Vehicle Color</label>
          <p><?php echo htmlspecialchars($user['vehicleColor']); ?></p>
        </div>

        <div class="info-box">
          <label>Plate Number</label>
          <p><?php echo htmlspecialchars($user['plateNumber']); ?></p>
        </div>

        <a href="edit-profile.php" class="edit-btn">
          <i class="fa-solid fa-pen"></i> Edit Profile
        </a>

      </div>
    </div>
  </div>

</body>

</html>