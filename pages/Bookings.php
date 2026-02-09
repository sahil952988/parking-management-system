<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Book Your Parking Space</title>
  <link rel="stylesheet" href="/parking/assets/CSS/bookings.css?v=<?php echo time(); ?>">
</head>

<body>

  <!-- Navbar Include -->
  <?php include __DIR__ . "/../includes/header.php"; ?>


  <section class="booking-section">
    <div class="booking-card">

      <h1>Book Your Parking Space</h1>
      <p class="slogan">Reserve your slot easily and securely</p>

      <form class="booking-form">

        <div class="form-row">
          <input type="text" placeholder="First Name">
          <input type="text" placeholder="Last Name">
        </div>

        <div class="form-row">
          <input type="email" placeholder="Enter your email">
          <input type="text" placeholder="phone Number">
        </div>

        <div class="form-row">
          <select>
            <option>Vehicle Type</option>
            <option value="">car</option>
            <option value="">bike</option>
          </select>
          <input type="text" placeholder="Vehicle Color">
        </div>

        <div class="form-row">
          <input type="text" placeholder="Plate Number">
        </div>

        <div class="form-row">
          <select>
            <option>Select Parking Location</option>
            <option value="">civil mall</option>
            <option value="">Norvic hospital</option>
          </select>
        </div>
        <div class="form-row">
          <select>
            <option>Select Parking slot</option>
            <option value="">A1</option>
            <option value="">B1</option>
          </select>
        </div>




        <div class="form-row">
          <input type="date">
          <input type="time">
        </div>

        <button type="submit">Book Now</button>

      </form>

    </div>
  </section>

  <script src="script.js"></script>
</body>

</html>