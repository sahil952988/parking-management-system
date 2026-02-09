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
$user = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Edit Profile | Parking Management</title>
  <link rel="stylesheet" href="/parking/assets/CSS/userPrfile.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

  <?php include __DIR__ . "/../includes/header.php"; ?>

  <div class="profile-wrapper">
    <div class="profile-info">

      <div class="head" style="display:flex; gap:10px;">
        <i style="font-size:20px;" class="fa-regular fa-user"></i>
        <h3>Edit Profile</h3>
      </div>

      <!-- SAME info-grid -->
      <form class="info-grid" method="POST" action="update-profile.php">

        <div class="info-box">
          <label>First Name</label>
          <input type="text" name="firstName" value="<?= htmlspecialchars($user['firstName']) ?>" required>
        </div>

        <div class="info-box">
          <label>Last Name</label>
          <input type="text" name="lastName" value="<?= htmlspecialchars($user['lastName']) ?>" required>
        </div>

        <div class="info-box">
          <label>Email</label>
          <input type="email" value="<?= htmlspecialchars($user['email']) ?>" disabled>
        </div>

        <div class="info-box">
          <label>Phone</label>
          <input type="text" name="number" value="<?= htmlspecialchars($user['number']) ?>" required>
        </div>

        <div class="info-box">
          <label>Vehicle Type</label>
          <input type="text" name="vehicleType" value="<?= htmlspecialchars($user['vehicleType']) ?>">
        </div>

        <div class="info-box">
          <label>Vehicle Color</label>
          <input type="text" name="vehicleColor" value="<?= htmlspecialchars($user['vehicleColor']) ?>">
        </div>

        <div class="info-box">
          <label>Plate Number</label>
          <input type="text" name="plateNumber" value="<?= htmlspecialchars($user['plateNumber']) ?>">
        </div>

        <!-- SAME button style -->
        <button type="submit" class="edit-btn">
          <i class="fa-solid fa-floppy-disk"></i> Save Changes
        </button>

      </form>

    </div>
  </div>

</body>

</html>