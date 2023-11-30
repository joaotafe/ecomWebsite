<?php
// session_start();
include "cart.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Link -->
    <!-- Local css link -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- CSS Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid bg-primary-subtle p-0">
        <!-- Top nav bar with hidden menu -->
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h2>The Record Player</h2>
                </a>
                <!-- OFF canvas menu button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- OFF canvas menu -->
                <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Welcome</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body text-bg-light">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    My Account
                                </a>
                                <ul class="dropdown-menu dropdown-menu-primary">
                                    <li> <a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#signInForm" aria-expanded="false" aria-controls="signInForm">
                                            Sign In
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" role="button" href="register.php">Register</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Sign in collapsed FORM -->
        <div class="modal fade" id="signInForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signInFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="signInFormLabel">Please, enter your credentials to sign in!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="signIn_validate.php" id="signInForm" name="signInForm">
                        <div class="modal-body">

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="signInEmail" name="signInEmail" placeholder="name@example.com">
                                <label for="signInEmail">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="signInPassword" name="signInPassword" placeholder="Password">
                                <label for="signInPassword">Password</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-secondary">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
        <div class="display">
            <div class="row">
                <div class="col-md-1 bg-primary-subtle">
                    <!-- SIDE NAVIGATION BAR -->
                    <!-- Your sidebar content here -->
                </div>
                <div class="col-md-10">
                    <!-- DISPLAY OF RECORDS -->
                    <div class="row">
                        <?php
                        //Connect to db
                        require_once("recordplayerdb_conn.php");

                        // SQL query to fetch record details
                        $sql = "SELECT recordID, title, artist, secondHand, price, recordCover FROM record";
                        $result = $mysqli->query($sql);

                        if ($result && $result->num_rows > 0) {
                            // Output data of each row
                            while ($record = $result->fetch_assoc()) {
                                echo '<div class="col-md-3">';
                                echo '<div class="flip-card">';
                                echo '<div class="flip-card-inner">';

                                echo '<div class="flip-card-front">';
                                echo '<img src="' . $record["recordCover"] . '" alt="' . $record["title"] . '" style="width:300px;height:300px;">';
                                echo '</div>';

                                echo '<div class="flip-card-back">';
                                echo '<h5>' . $record["title"] . '</h5>';
                                echo '<p>Artist: ' . $record["artist"] . '</p>';
                                echo '<p>' . ($record["secondHand"] ? 'Second Hand' : 'New') . '</p>';
                                echo '<p>Price: $' . $record["price"] . '</p>';

                                // Hidden recordID
                                echo '<div style="display:none;">Record ID: ' . $record["recordID"] . '</div>';

                                // Add to cart form
                                echo '<form action="add_shopping_cart.php" method="post">';
                                echo '<input type="hidden" name="recordID" value="' . $record["recordID"] . '">';
                                echo '<input type="hidden" name="quantity" value="1">';  // Assuming adding one item at a time
                                echo '<button type="submit" name="add_to_cart" class="add-to-cart-btn">+</button>';
                                echo '</form>';

                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo '<div class="col-12"><p>No records found.</p></div>';
                        }

                        // Close connection
                        $mysqli->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- CART WINDOW IS OFF CANVAS -->
        <div class="position-absolute top-50 start-0 translate-middle-y">
            <img type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" class="cart" src="./images/cart.png" alt="Shopping Cart">
        </div>

        <!-- SHOPPING CART OFF CANVAS -->
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Shopping Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <?php
                // Assuming the ShoppingCart class has already been included and session started
                // if (!isset($_SESSION['shopping_cart'])) {
                //     $_SESSION['shopping_cart'] = new ShoppingCart();
                // }else{
                //     $_SESSION['shopping_cart'] = "";
                // }

                // // Check if the shopping cart has items
                // $cart = $_SESSION['shopping_cart'];

                // // Retrieve items from the cart
                // $items = $cart->getItems();
                // if (!$cart->isEmpty()) {
                //     echo '<ul>';
                //     foreach ($items as $item) {
                //         $product = $item['product']; // $product is an instance of Product
                //         echo '<li>';
                //         echo 'Title: ' . htmlspecialchars($product->getTitle()) . '<br>';
                //         echo 'Quantity: ' . htmlspecialchars($product->getQty()) . '<br>';
                //         echo 'Price per item: $' . htmlspecialchars($product->getPrice()) . '<br>';
                //         echo 'Total cost for this item: $' . htmlspecialchars($product->get_product_cost()) . '<br>';
                //         echo '</li>';
                //     }
                //     echo '</ul>';
                //     echo '<strong>Total: $' . $cart->getTotal() . '</strong>';
                // } else {
                //     echo '<p>No records in the cart.</p>';
                // }
                ?>

            </div>
        </div>


    </div>

    <div class="p-3 text-center">
        <p>All Rights Reserved©- Designed by Luca Souza - 2023</p>
    </div>

    </div>
    <!-- JS Bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>