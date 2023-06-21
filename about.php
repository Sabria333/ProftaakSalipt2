<!DOCTYPE html>
<html>
<head>
  <title>Contact Us | Clothing Webshop</title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylesheet.css">

    
</head>
<body>
<?php 
include "inc/function.php";
?>
  <main>
    <h1>About Us</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, neque quis tristique bibendum, ipsum lectus aliquet nunc, vel vulputate quam risus sit amet lacus. Suspendisse gravida, sem eu tristique commodo, nibh nibh luctus est, ac sollicitudin tellus risus vel velit. Nulla facilisi. Vivamus pretium nisi a luctus posuere. Sed pellentesque urna a risus vulputate, ut ullamcorper lacus tincidunt. Sed gravida tortor enim, vel bibendum ex cursus ac. Praesent lacinia elit in elit scelerisque, sit amet accumsan sapien pulvinar.</p>
    <p>Donec consectetur lacus ut semper bibendum. Suspendisse non risus ut lectus tristique auctor eu vel risus. Duis auctor, mauris id lobortis convallis, urna enim vestibulum tortor, vel tristique nulla risus at nunc. Aliquam suscipit, lorem eget feugiat gravida, lorem tellus imperdiet eros, eu auctor quam tortor vel libero. Proin efficitur mauris nec ligula sagittis vehicula. Aenean sodales neque vel suscipit efficitur. Pellentesque condimentum sem in nisi interdum rhoncus. Nam aliquam risus ac felis mattis pulvinar. Nulla facilisi. Pellentesque pharetra congue nisi a hendrerit. Nulla non tortor non metus varius vestibulum. In hac habitasse platea dictumst. Suspendisse tincidunt leo vel nisl dignissim, vel tempus elit bibendum. Sed sed libero tincidunt, elementum nunc in, lacinia metus. Nullam non tortor non libero maximus ornare vel ac augue.</p>
  </main>

  <footer>
    <div class="footer-content">
      <p>&copy; 2023 My Clothing Shop</p>
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
</body>
</html>
<script src="main.js"></script>
