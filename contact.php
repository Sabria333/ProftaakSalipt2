<!DOCTYPE html>
<html>
<head>
  <title>Log In | Clothing Webshop</title>
  <link rel="stylesheet" type="text/css" href="css/stylecontact.css">
  <link rel="stylesheet" href="css/style.css">
<body>
<?php 
include "inc/function.php";

?>

  <main>
  <h1>Contact Us</h1>


    <div class="container-contact">
      <div class="left-contact">
      
        <div class="contact-info">
          <h2>Address:</h2>
          <p>123 Main St</p>
          <p>Helmond, NL 12345</p>

          <h2>Phone:</h2>
          <p>1-800-123-4567</p>

          <h2>Email:</h2>
          <p>info@clothingwebshop.com</p>

          <p></p>
        </div>

        <form action="/send-email" method="post" class="contact-form">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>

          <button type="submit">Send Message</button>
        </form>
      </div>

      <div class="right-contact">
        <img src="img/1.jpg" alt="Girl in a jacket" >
        <img src="img/2.jpg" alt="Girl in a jacket" >
        <img src="img/3.jpg" alt="Girl in a jacket" >
      </div>
  </main>

  <footer>
    <div class="footer-content">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>

      <div class="cart" id="cart">
  <h2>Shopping Cart</h2>
  <div id="cart-items"></div>
  <div class="cart-total" id="cart-total"></div>
  <div class="buy-now-btn">
    <a href="order.php" class="btn" onclick="storeOrderSummary()">Buy Now</a>
  </div>
  <div class="cart-toggle" onclick="toggleCart()">&times;</div>
  <button onclick="resetCart()">Reset Cart</button>
    </div>
  </footer>
</body>
</html>
<script src="main.js"></script>
