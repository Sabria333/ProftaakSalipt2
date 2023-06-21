<?php 
include "inc/function.php";

?>

<!DOCTYPE html>
<html>
<head>
  <title>Order - My Clothing Store</title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/order.css">
</head>
<body>

  <h2>Order Details</h2>
  <form action="inc/process_order.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required value="<?php echo isset($_SESSION['user']['userEmail']) ? $_SESSION['user']['userEmail'] : ''; ?>">

    <label for="address">Address:</label>
    <input type="text" name="address" required>

    <h3>Order Summary</h3>
    <div class="cart" id="cart">
  <div id="cart-items"></div>
  <div class="cart-total" id="cart-total"></div>
  <div class="buy-now-btn">
    <a href="order.php" class="btn" onclick="storeOrderSummary()">order now</a>
  </div>
  <div class="cart-toggle" onclick="toggleCart()">&times;</div>
  <button onclick="resetCart()">Reset Cart</button>

  </form>

  <script>
    // Fetch and display the order summary from local storage
    const orderSummary = localStorage.getItem('orderSummary');
    const orderTotal = localStorage.getItem('orderTotal');
    document.getElementById('order-summary').innerHTML = orderSummary;
    document.getElementById('order-total').innerHTML = `Total: $${orderTotal}`;

    // Clear the stored order summary and total
    localStorage.removeItem('orderSummary');
    localStorage.removeItem('orderTotal');
  </script>
  <script src="main.js"></script>

</body>
</html>

