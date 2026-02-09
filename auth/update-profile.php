<?php
session_start();
include __DIR__ . "/../includes/db.php";

if (!isset($_SESSION['user_email'])) {
  header("Location: login.php");
  exit;
}

$email = $_SESSION['user_email'];

$sql = "UPDATE registration 
        SET firstName = ?, lastName = ?, number = ?, vehicleType = ?, vehicleColor = ?, plateNumber = ?
        WHERE email = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
  "sssssss",
  $_POST['firstName'],
  $_POST['lastName'],
  $_POST['number'],
  $_POST['vehicleType'],
  $_POST['vehicleColor'],
  $_POST['plateNumber'],
  $email
);

$stmt->execute();

header("Location: userprofile.php");
exit;
