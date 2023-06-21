<?php
include "inc/function.php";
$products = getProducts();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Shop - My Clothing Store</title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/shop.css">
  <script src="js/main.js"></script>
</head>
<body>

  <main>
    <section class="featured">
      <h2>Featured Products</h2>
      <div class="products">
        <?php foreach ($products as $product) { ?>
          <div class="product">
            <a href="detailproduct.php?productId=<?php echo $product['productId']; ?>" target="_blank">
              <img src="img/<?php echo $product['productImage']; ?>" alt="<?php echo $product['productTitle']; ?>">
            </a>
            <h3><?php echo $product['productTitle']; ?></h3>
            <p>&euro;<?php echo $product['productPrice']; ?></p>
         
          </div>
        <?php } ?>
      </div>
    </section>

    <section class="newsletter">
      <h2>Sign up for our Newsletter</h2>
      <form action="#" method="POST">
        <input type="email" name="email" placeholder="Enter your email">
        <button type="submit" class="btn">Subscribe</button>
      </form>
    </section>
  </main>

  <footer>
    <div class="footer-content">
      <p>&copy; My Clothing Store 2023</p>
      <ul class="social-icons">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
  </footer>

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
<script src="main.js"></script>

</body>
</html>
