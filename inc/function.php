<?php


function dd($s)
{
    echo '<pre>' . var_dump($s) . '</pre>';
}


function usernameExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users Where usersUsername = ? OR usersEmail = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $email);

    $stmt->execute();

    $result = $stmt->get_result(); // get the mysqli result
    $result = $result->fetch_assoc();

    //die(var_dump($result));
    return !!$result;
}

function db()
{
    $servername = "localhost";
    $database = "pt2s";
    $username = "root";
    $password = "";

    // create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // check connection
    if (mysqli_connect_error()) {
        die("database connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function registerUser()
{
    $conn = db();
    extract($_POST);


    $sql = "INSERT INTO `user` (`userEmail`, `userPassword`, `userRegisterDate`) VALUES ('" . $email . "','" . $password . "', NOW())";

    if (!empty($email) && !empty($password)) {
        if ($conn->query($sql)) {
            echo "new record created successfully";
        } else {
            echo "error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}


function loginUser()
{
    $conn = db();
    extract($_POST);

    dd("test");
    // die();

    $sql = "SELECT * FROM `user` WHERE `userEmail` = ? AND `userPassword` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user; // Store user ID in session
        $_SESSION['logged_in'] = true;
        echo "Login successful";
        // Redirect the user to the appropriate page based on userAuthID
        if ($user['userAuthID'] == 1) {
            header("Location: admin.php");
        } else {
            header("Location: customer.php");
        }
        exit();
    } else {
        echo "Invalid email or password";
    }
    $conn->close();
}

function handlePost()
{
    dd($_POST);
    //    die("Ik ben nu op regelnummer " . __LINE__);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['signup'])) {
            // register
            registerUser();
        }

        // login
        if (isset($_POST['login'])) {
            loginUser();
        }

        // logout
       
        // add to cart
        

        // place order


    }
}
?>

<?php

function getCurrentURL()
{
    $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    return $actual_link;
}

function navbar()
{
    session_start();
    // session_destroy();

    $output = '<header>
                <nav>
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>';

    // Check if the user is logged in
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        // User is logged in
        if ($_SESSION['user']['userAuthID'] == 1) {
            // Admin user
            $output .= '<li><a href="admin.php">Profile</a></li>';
        } else {
            // Customer user
            $output .= '<li><a href="customer.php">Profile</a></li>';
        }
        $output .= '<li><a href="inc/logout.php">Logout</a></li>';
    } else {
        // User is not logged in
        $output .= '<li class="login"><a href="login.php">Log In</a></li>';
    }

    $output .= '<li class="nav-cart">
    
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
          </style>';

    return $output;
}


function getProducts()
{
    // connect to database
    $db = db();
    // define the query that will be sent to the db
    $sql = "SELECT * FROM products ORDER BY productTitle";
    // execute query and fetch data
    $result = $db->query($sql) or die($db->error . "<br />SQL: " . $sql);
    $products = $result->fetch_all(MYSQLI_ASSOC);
    // return data
    return $products;
}

function getProduct()
{
    $productId = $_GET['productId'];
    // connect to database
    $db = db();
    // define the query that will be sent to the db
    $sql = "SELECT * FROM products WHERE productId = " . $productId;
    // execute query and fetch data
    $result = $db->query($sql) or die($db->error . "<br />SQL: " . $sql);
    $product = $result->fetch_assoc();
    // return data
    return $product;
}


echo navbar();
?>
