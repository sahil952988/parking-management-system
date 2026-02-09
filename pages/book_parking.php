<?php
session_start();
include __DIR__ . "/../includes/db.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header("Location: ../pages/bookings.php");
  exit;
}

$user_id = $_SESSION['user_id'];

$location_id   = $_POST['location_id'];
$vehicle_no    = $_POST['vehicle_number'];
$vehicle_type  = $_POST['vehicle_type'];
$vehicle_color = $_POST['vehicle_color'];
$date          = $_POST['booking_date'];
$time          = $_POST['booking_time'];

/* 1️⃣ Find free slot */
$slotQuery = $conn->query(
  "SELECT id FROM parking_slots
   WHERE location_id = $location_id AND status = 'available'
   LIMIT 1"
);

if ($slotQuery->num_rows === 0) {
  header("Location: ../pages/bookings.php?error=full");
  exit;
}

$slot = $slotQuery->fetch_assoc();
$slot_id = $slot['id'];

/* 2️⃣ Insert booking */
$conn->query(
  "INSERT INTO bookings
   (user_id, location_id, slot_id, vehicle_number, vehicle_type, vehicle_color, booking_date, booking_time)
   VALUES
   ($user_id, $location_id, $slot_id, '$vehicle_no', '$vehicle_type', '$vehicle_color', '$date', '$time')"
);

/* 3️⃣ Update slot */
$conn->query(
  "UPDATE parking_slots SET status='booked' WHERE id=$slot_id"
);

/* 4️⃣ Redirect with success */
header("Location: ../pages/bookings.php?success=1");
exit;
