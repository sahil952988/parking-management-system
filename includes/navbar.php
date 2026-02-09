<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<nav class="navbar">

  <div class="mynav">

    <!-- Logo -->
    <div class="logo">
      <a href="/parking/index.php">
        <img class="logo-img" src="/parking/assets/images/logo.png" alt="logo">
      </a>
    </div>

    <!-- Desktop Menu -->
    <div class="nav-items desktop-menu">

      <a href="/parking/pages/Bookings.php">Book Now</a>

      <a class="popularLocation" href="/parking/pages/popularLocation.php">Popular Location</a>
      <a href="/parking/pages/blog.php">Blog</a>

      <?php if (isset($_SESSION['user_name'])) { ?>
        <span class='usergreeting'>
          Hello, <strong><?php echo htmlspecialchars($_SESSION['user_name']); ?></strong>
        </span>

        <div class="user-menu">
          <div id="box1" style="display: flex;">
            <i class="fa-regular fa-circle-user"></i>
            <i class="fa-solid fa-caret-down"></i>
          </div>

          <div id="box2" class="dropdown hidden">
            <a class="profile" href="/parking/auth/userProfile.php">👤 My Profile</a>
            <a href="/parking/auth/logout.php" class="logout">🚪 Logout</a>
          </div>
        </div>

      <?php } else { ?>
        <a href="/parking/auth/signup.php">Sign in</a>
      <?php } ?>
    </div>


    <!-- Hamburger -->
    <div class="hamburger" onclick="toggleMenu()">
      ☰
    </div>

  </div>

  <div id="mobileMenu" class="mobile-menu">

    <?php if (isset($_SESSION['user_name'])) { ?>
      <p>
        Hello, <strong><?php echo htmlspecialchars($_SESSION['user_name']); ?></strong>
      </p>
      <a href="">My Profile</a>
      <a href="/parking/auth/logout.php">Logout</a>
    <?php } else { ?>
      <a href="/parking/auth/signup.php">Sign in</a>
    <?php } ?>

    <a href="/parking/pages/blog.php">Blog</a>
    <p class="popular-location">Popular Location</p>

  </div>

</nav>

<script>
  function toggleMenu() {
    const menu = document.getElementById("mobileMenu");
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
  }
</script>


<!-- logout and profile dropdown box -->
<script>
  const userIcon = document.getElementById("box1");
  const dropdown = document.getElementById("box2");
  const menu = document.querySelector(".user-menu");

  /* toggle on icon click */
  userIcon.addEventListener("click", function(e) {
    e.stopPropagation(); // 🔴 stop bubbling
    dropdown.classList.toggle("hidden");
  });

  /* prevent dropdown click from closing */
  dropdown.addEventListener("click", function(e) {
    e.stopPropagation(); // 🔴 important
  });

  /* close when clicking anywhere else */
  document.addEventListener("click", function() {
    dropdown.classList.add("hidden");
  });
</script>