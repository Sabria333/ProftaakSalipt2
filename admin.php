<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
  <?php include "inc/function.php";
   ?>
  <div class="container">
    <div class="profile">
      <img src="img/2.jpg" alt="Profile Picture">
      <h1>Admin page</h1>
      <p>
        Welcome to the admin page
      </p>
    </div>

    <div class="orders">
      <p>customer orders<p>
        <?php
  // Establish database connection

  // Retrieve order data from the database
  $sql = "SELECT * FROM orders";
  $result = $conn->query($sql);


  
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "<div class='order'>";
          echo "Order ID: " . $row['orderID'] . "<br>";
          echo "Order Name: " . $row['orderName'] . "<br>";
          echo "Order Description: " . $row['orderDescription'] . "<br>";
          echo "Order Price: " . $row['orderPrice'] . "<br>";
          echo "Order Email: " . $row['orderEmail'] . "<br>";
          echo "Order Address: " . $row['orderAddress'] . "<br>";
          echo "Order Status: " . $row['orderStatus'] . "<br>";
          echo "</div>";
      }
  } else {
      echo "No orders found";
  }

  // Close the database connection
  $conn->close();
  ?>
      </div>
    </div>
    
  </div>
  
</body>
</html>
