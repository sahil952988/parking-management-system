<?php
$conn = mysqli_connect("localhost", "root", "", "parkingsystem");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
