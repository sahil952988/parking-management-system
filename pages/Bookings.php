<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Book Parking</title>
  <link rel="stylesheet" href="/parking/assets/CSS/bookings.css?v=<?php echo time(); ?>">
</head>

<body>

  <!-- Navbar Include -->
  <?php include __DIR__ . "/../includes/header.php"; ?>


  <section class="booking-container">

    <!-- LEFT : USER INFO -->
    <div class="user-card">
      <h3>User Info</h3>

      <div class="info"><span>First Name:</span> David</div>
      <div class="info"><span>Last Name:</span> Smith</div>
      <div class="info"><span>Email:</span> david@gmail.com</div>
      <div class="info"><span>Phone:</span> 9800000000</div>
      <div class="info"><span>Vehicle Type:</span> Car</div>
      <div class="info"><span>Vehicle Color:</span> Black</div>
      <div class="info"><span>Plate No:</span> BA66PA99</div>
    </div>

    <!-- RIGHT : LOCATION + SLOTS -->
    <div class="booking-right">

      <!-- SEARCH LOCATION -->
      <div class="location-search">
        <input type="text" placeholder="Search Location">
      </div>

      <!-- DATE & TIME -->
      <div class="date-time">
        <input type="date">
        <input type="time">
      </div>

      <!-- SLOTS -->
      <div class="slots-wrapper">
        <h4>Available Slots</h4>

        <div class="slots-grid">
          <div class="slot available">A1</div>
          <div class="slot occupied">A2</div>
          <div class="slot picked">A3</div>
          <div class="slot reserved">A4</div>
          <div class="slot available">A5</div>

          <div class="slot occupied">B1</div>
          <div class="slot available">B2</div>
          <div class="slot reserved">B3</div>
          <div class="slot picked">B4</div>
          <div class="slot available">B5</div>

          <div class="slot available">C1</div>
          <div class="slot occupied">C2</div>
          <div class="slot available">C3</div>
          <div class="slot reserved">C4</div>
          <div class="slot available">C5</div>
        </div>
      </div>


      <div class="slot-legend">
        <div class="legend-item">
          <span class="legend-box available"></span> Available
        </div>
        <div class="legend-item">
          <span class="legend-box occupied"></span> Occupied
        </div>
        <div class="legend-item">
          <span class="legend-box picked"></span> Picked
        </div>
        <div class="legend-item">
          <span class="legend-box reserved"></span> Reserved
        </div>
      </div>

      <button class="book-btn">Book Slot</button>

    </div>
  </section>

</body>

</html>