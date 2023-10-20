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
    <div class="container-fluid bg-secondary p-0">
        <!-- Top nav bar with hidden menu -->
        <nav class="navbar fixed-top">
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
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body text-bg-light">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    My Account
                                </a>
                                <ul class="dropdown-menu dropdown-menu-primary">
                                    <li><a class="dropdown-item" href="#">Sign In</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Register</a></li>
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
        <div class="display">
            <div class="row">
                <div class="col-md-1 bg-secondary">
                    <!-- SIDE NAVEGATION BAR -->
                    <ul class="navbar-nav me-auto">
                        <!-- Add your side navigation items here -->
                    </ul>
                </div>
                <div class="col-md-10">
                    <!-- DISPLAY OF PRODUCTS -->
                    <div class="row">
                        <!-- Add your product cards here -->
                    </div>
                </div>
                <div class="col-md-1 bg-secondary p-0">

                </div>
            </div>

            <!-- CART WINDOW IS OFF CANVAS -->
            <!--  
            <div class="position-absolute top-50 start-0 translate-middle-y">
                <img type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" class="cart" src="./images/cart.png" alt="Shopping Cart">
            </div>
            -->
            <!-- SHOPPING CART OFF CANVAS  -->
            
            <!-- <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Shopping Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    
                </div>
            </div> -->

        </div>

        <div class="p-3 text-center">
            <p>All Rights Reserved© - Designed by Luca Souza - 2023</p>
        </div>

    </div>
    <!-- JS Bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
