<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Popular Parking Locations</title>
  <link rel="stylesheet" href="/parking/assets/CSS/popularLocation.css?v=<?php echo time(); ?>">

</head>

<body>

  <!-- Navbar Include -->
  <?php include __DIR__ . "/../includes/header.php"; ?>


  <section class="popular-location">
    <h2>Popular Parking Locations in Nepal</h2>
    <p class="subtitle">
      Parking available near major hospitals, malls, government offices, and business hubs.
    </p>

    <div class="location-grid">

      <div class="location-card">
        <h3>🏥 Hospitals</h3>
        <ul>
          <li>Norvic Hospital,Thapathali</li>
          <li>Star Hospital, Sanepa</li>
          <li>Vyaodhya Hospital,Balkhu</li>
          <li>Teaching Hospital, Maharajgunj</li>
          <li>Bir Hospital</li>
          <li>Grande International Hospital</li>
          <li>Patan Hospital</li>
        </ul>
      </div>

      <div class="location-card">
        <h3>🏬 Shopping Malls</h3>
        <ul>
          <li>Civil Mall, Sundhara</li>
          <li>Labim Mall, Lalitpur</li>
          <li>KL Tower, Chabahil</li>
          <li>Bhatbhateni Super Market</li>
        </ul>
      </div>

      <div class="location-card">
        <h3>🏛️ Government Offices</h3>
        <ul>
          <li>NEB Office, Sanothimi</li>
          <li>Tribhuvan University, Kirtipur</li>
          <li>Singha Durbar Area</li>
          <li>DOTM Offices</li>
        </ul>
      </div>

      <div class="location-card">
        <h3>✈️ Travel & Transit</h3>
        <ul>
          <li>Tribhuvan International Airport</li>
          <li>Gongabu Bus Park</li>
          <li>Kalanki Bus Terminal</li>
        </ul>
      </div>

    </div>
  </section>

  <!-- Footer Include -->
  <?php include __DIR__ . "/../includes/footer.php"; ?>

</body>

</html>