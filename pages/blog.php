<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parking Management Blog</title>
  <link rel="stylesheet" href="/parking/assets/css/blog.css?v=<?php echo time(); ?>">
</head>

<body>
  <!-- Navbar Include -->
  <?php include __DIR__ . "/../includes/header.php"; ?>

  <!-- Hero Section -->
  <section class="hero">
    <h1>OUR BLOGS</h1>
  </section>


  <!-- Recent Blog Posts -->
  <section class="recent-posts">
    <h2>Recent parking insights</h2>
    <div class="recent-grid">
      <article class="card large">
        <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a" alt="">
        <div class="text">
          <p class="author">Admin • 15 Oct 2025</p>
          <h3>How Smart Sensors Revolutionize Parking Management</h3>
          <p>Discover how IoT sensors are transforming parking spaces, enabling automation and real-time monitoring.</p>
          <div class="tags"><span>IoT</span><span>Automation</span><span>Smart City</span></div>
        </div>
      </article>

      <article class="card">
        <img src="https://plus.unsplash.com/premium_photo-1749119173867-a3c568ea085a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8dHJhY2tpbmclMjBjYXJ8ZW58MHx8MHx8fDA%3D" alt="">
        <div class="text">
          <p class="author">Tech Team • 10 Oct 2025</p>
          <h3>Building a Mobile App for Vehicle Tracking</h3>
          <p>Integrating mobile technology into parking systems allows users to locate and reserve slots easily.</p>
          <div class="tags"><span>Mobile App</span><span>Tracking</span></div>
        </div>
      </article>

      <article class="card">
        <img src="https://media.istockphoto.com/id/2258066167/photo/close-up-of-ukrainian-vehicle-license-plate-detail.webp?a=1&b=1&s=612x612&w=0&k=20&c=AF1NpVtdycR8V54klIGRtM17N9OGx8jICTyFIrYcvCE=" alt="">
        <div class="text">
          <p class="author">R&D Dept • 8 Oct 2025</p>
          <h3>License Plate Recognition using AI</h3>
          <p>Learn how ANPR (Automatic Number Plate Recognition) improves security and reduces manual checks.</p>
          <div class="tags"><span>AI</span><span>Security</span></div>
        </div>
      </article>

      <article class="card large">
        <img src="https://media.istockphoto.com/id/1324857650/photo/complete-garden-landscaping-isolated-over-white-background-3d-illustration.webp?a=1&b=1&s=612x612&w=0&k=20&c=-6naLCXA2Z-js4iDHhxbs5ym4JJzHYgPIVPcg0YXJDU=" alt="">
        <div class="text">
          <p class="author">Team Vision • 5 Oct 2025</p>
          <h3>Designing an Efficient Parking Layout System</h3>
          <p>A well-structured parking layout reduces traffic congestion and maximizes space efficiency.</p>
          <div class="tags"><span>Design</span><span>Optimization</span></div>
        </div>
      </article>
    </div>
  </section>

  <!-- All Blog Posts -->
  <section class="all-posts">
    <h2>All parking blogs</h2>
    <div class="all-grid">
      <article class="card">
        <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb" alt="">
        <div class="text">
          <p class="author">System Admin • 1 Oct 2025</p>
          <h3>Integrating Payment Gateways into Parking Systems</h3>
          <div class="tags"><span>Payment</span><span>Automation</span></div>
        </div>
      </article>

      <article class="card">
        <img src="https://plus.unsplash.com/premium_photo-1677093905912-a653c6301260?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y2xvdWQlMjBzdG9yYWdlfGVufDB8fDB8fHww" alt="">
        <div class="text">
          <p class="author">Dev Team • 25 Sep 2025</p>
          <h3>Cloud Storage for Parking Data</h3>
          <div class="tags"><span>Cloud</span><span>Database</span></div>
        </div>
      </article>

      <article class="card">
        <img src="https://plus.unsplash.com/premium_photo-1661925156485-42bbe60d85c6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8c21hcnRwYXJraW5nfGVufDB8fDB8fHww" alt="">
        <div class="text">
          <p class="author">Admin • 20 Sep 2025</p>
          <h3>Smart Parking vs Traditional Parking</h3>
          <div class="tags"><span>Innovation</span><span>Technology</span></div>
        </div>
      </article>

      <article class="card">
        <img src="https://plus.unsplash.com/premium_photo-1663100722417-6e36673fe0ed?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZnJhdWR8ZW58MHx8MHx8fDA%3D" alt="">
        <div class="text">
          <p class="author">Team Alpha • 10 Sep 2025</p>
          <h3>Reducing Parking Fraud with RFID</h3>
          <div class="tags"><span>RFID</span><span>Security</span></div>
        </div>
      </article>
    </div>
  </section>

  <!-- Footer Include -->
  <?php include __DIR__ . "/../includes/footer.php"; ?>

</body>

</html>