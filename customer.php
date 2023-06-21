<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css/customer.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>

  <?php
  include "inc/function.php";
  ?>
  <div class="container">
    <div class="profile">
      <img src="img/profile.jpg" alt="Profile Picture">
      <h1>Sabria El Khadir</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
        Mauris et diam consectetur, vehicula lacus id, eleifend arcu.<br>
        Curabitur hendrerit metus et lorem faucibus auctor.
      </p>
    </div>
    <table>
      <caption>Gegevens</caption>
      <thead>
        <tr>
          <th scope="col">Orders</th>
          <th scope="col">Datum</th>
          <th scope="col">Prijs</th>
          <th scope="col">Aantal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="orderID">1</td>
          <td data-label="orderDate">03/12/2023</td>
          <td data-label="orderPrice">€1,190</td>
          <td data-label="orderAantal">12</td>
        </tr>
        <tr>
          <td data-label="orderID">2</td>
          <td data-label="orderDate">04/01/2022</td>
          <td data-label="orderPrice">€1,190</td>
          <td data-label="orderAantal">2</td>
        </tr>
        <tr>
          <td data-label="orderID">3</td>
          <td data-label="orderDate">04/01/2021</td>
          <td data-label="orderPrice">€1,190</td>
          <td data-label="orderAantal">4</td>
        </tr>
        <tr>
          <td data-label="orderID">4</td>
          <td data-label="orderDate">03/06/2021</td>
          <td data-label="orderPrice">€1,190</td>
          <td data-label="orderAantal">6</td>
        </tr>
      </tbody>
    </table>
</body>
<footer>
  <div class="footer-content">
    <p>&copy; My Clothing Store 2023</p>
    <ul class="social-icons">
      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    </ul>
  </div>

  <?php

  function addUser(
    $orderID,
    $orderName,
    $orderDescription,
    $orderPrice,
    $orderEmail,

    $orderAdress,
    $orderStatus,
    $orderDate
  ) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pt2";
    // Maak verbinding met de database
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Controleer de verbinding
    if ($conn->connect_error) {
      die("Kan geen verbinding maken met de database: " . $conn->connect_error);
    }

    // Voorbereid SQL-statement

    $sql = "INSERT INTO users (name, profile_picture, bio)

          VALUES ('$orderID', '$orderName', '$orderDescription', '$orderPrice', '$orderEmail', '$orderAdress', '$orderStatus', '$orderDate')";
    // Voer de query uit
    if ($conn->query($sql) === TRUE) {

      echo "Gebruiker succesvol toegevoegd.";
    } else {

      echo "Fout bij het toevoegen van de gebruiker: " . $conn->error;
    }
    // Sluit de databaseverbinding
    $conn->close();
  }
  ?>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "pt2";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT id, firstname, lastname FROM orders";

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo "td: " . $row["orderID"] . " - Name: " . $row["orderID"] . " " . $row["orderDate"] . $row["orderPrice"] . $row["orderAantal"] . "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>

<?php 
$conn = db ();
$select_user = mysqli_query($conn, "SELECT * FROM `user`") or die('"Get user information" failed. Please try again.');

if (mysqli_num_rows($select_user) > 0)

{
    
   $fetch_user = mysqli_fetch_assoc($select_user);

};

 echo $fetch_user["userId"];
?>
</footer>
</html>