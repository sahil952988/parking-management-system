<?php
$conn = new mysqli("localhost", "root", "", "parkingsystem");

$location_id = $_GET['location_id'];

$query = "
  SELECT COUNT(*) AS slots
  FROM parking_slots
  WHERE location_id = $location_id AND status = 'available'
";

$result = $conn->query($query);
$data = $result->fetch_assoc();

echo json_encode($data);
