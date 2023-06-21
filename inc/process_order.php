<?php
// inc/process_order.php

include "inc/function.php";
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$productName = ""; // Get the product name from the form submission
$productPrice = ""; // Get the product price from the form submission

// Insert data into the database
$query = "INSERT INTO orders (orderStatus, orderDate, userId) VALUES ('Pending', NOW())";

$result = mysqli_query($connection, $query);

if ($result) {
  // Order inserted successfully
  echo "Order placed successfully!";
} else {
  // Error in inserting order
  echo "Error placing the order. Please try again.";
}

mysqli_close($connection);
?>
