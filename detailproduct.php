<?php
  include "inc/function.php";
  $product = getProduct();
  // dd($product);
  ?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylesheet.css">

    <title>Product Details</title>
</head>
<body>

    <div class="container">
        <div class="box">
            <div class="images">
                <div class="img-holder active">
                <img src="img/<?php echo $product['productImage']; ?>">          
              </div>
               
            </div>
            <div class="basic-info">
                <h1><?php echo $product['productTitle']; ?></h1>
                
                <span>&euro; <?php echo $product['productPrice']; ?></span>
                <div class="options">
        <div class="product">
          <h3><?php echo $product['productTitle']; ?></h3>
          <p> &euro;<?php echo $product['productPrice']; ?></p>
          <a href="#" class="btn" onclick="addToCart('<?php echo $product['productTitle']?>', <?php echo $product['productPrice']?>)">Add to Cart</a>
        </div>
        <?php
      ?>                
                   <label for="size">Size:</label>
                    <select id="size" name="size">
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>
            </div>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus temporibus corporis repudiandae, consectetur nostrum nisi commodi placeat rerum molestias numquam nihil accusantium deleniti! Enim, nesciunt a quis amet hic officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nemo accusantium tempora facere doloremque cum iusto, ut neque, fuga omnis libero laborum ullam. At dolorum qui atque labore illo dignissimos.</p>
               
            </div>
        </div>
    </div> 
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
