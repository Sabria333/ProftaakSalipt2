<?php
session_start();
?>
<header>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>

      <?php
      // Check if the user is logged in
      if (isset($_SESSION['user_id'])) {
          // User is logged in
          echo '<li><a href="profile.php">Profile</a></li>';
          echo '<li><a href="logout.php">Logout</a></li>';
      } else {
          // User is not logged in
          echo '<li class="login"><a href="login.php">Log In</a></li>';
      }
      ?>

      <li class="nav-cart">
        <a href="#" onclick="toggleCart()">
          <img src="img/cart.jpg" alt="Cart" class="cart-image">
          <span class="nav-cart-count" id="nav-cart-count">0</span>
        </a>
      </li>
    </ul>
  </nav>
</header>
<style>
  .cart-image {
    width: 25px; /* Adjust the width as per your requirement */
    height: 25px; /* Adjust the height as per your requirement */
  }
</style>
