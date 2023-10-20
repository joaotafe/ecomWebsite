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
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    My Account
                                </a>
                                <ul class="dropdown-menu dropdown-menu-primary">
                                    <li> <a class="dropdown-item" role="button" data-bs-toggle="collapse" data-bs-target="#signInForm" aria-expanded="false" aria-controls="signInForm">
                                            Sign In
                                        </a>
                                        <div id="signInForm" class="accordion-collapse collapse">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Email address</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                                <label for="floatingPassword">Password</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Register</a></li>
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







        <!-- Register Modal FORM -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Please, register with us!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Enter name">
                            <label for="floatingInput">Given Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Enter family name">
                            <label for="floatingInput">Family Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingInput" placeholder="Enter family name">
                            <label for="floatingInput">Date of birth</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary">Register</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="display">
            <div class="row">
                <div class="col-md-1 bg-secondary">
                    <!-- SIDE NAVEGATION BAR -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                </div>
                <div class="col-md-10">
                    <!-- DISPLAY OF PRODUCTS -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./images/nina.png" alt="Avatar">
                                    </div>
                                    <div class="flip-card-back">
                                        <h1>Name of Album</h1>
                                        <p>When it was released</p>
                                        <p>More info</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./images/beatles.png" alt="Avatar" style="width:300px;height:300px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <h1>Name of Album</h1>
                                        <p>When it was released</p>
                                        <p>More info</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./images/travis.png" alt="Avatar" style="width:300px;height:300px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <h1>Name of Album</h1>
                                        <p>When it was released</p>
                                        <p>More info</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./images/nirvana.png" alt="Avatar" style="width:300px;height:300px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <h1>Name of Album</h1>
                                        <p>When it was released</p>
                                        <p>More info</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./images/nina.png" alt="Avatar">
                                    </div>
                                    <div class="flip-card-back">
                                        <h1>Name of Album</h1>
                                        <p>When it was released</p>
                                        <p>More info</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./images/beatles.png" alt="Avatar" style="width:300px;height:300px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <h1>Name of Album</h1>
                                        <p>When it was released</p>
                                        <p>More info</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./images/travis.png" alt="Avatar" style="width:300px;height:300px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <h1>Name of Album</h1>
                                        <p>When it was released</p>
                                        <p>More info</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./images/nirvana.png" alt="Avatar" style="width:300px;height:300px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <h1>Name of Album</h1>
                                        <p>When it was released</p>
                                        <p>More info</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 bg-secondary p-0">

                </div>
            </div>

            <!-- CART WINDOW IS OFF CANVAS -->
            <div class="position-absolute top-50 start-0 translate-middle-y">
                <img type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" class="cart" src="./images/cart.png" alt="Shopping Cart">
            </div>

            <!-- SHOPPING CART OFF CANVAS  -->
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Shopping Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <p>Try scrolling the rest of the page to see this option in action.</p>
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

<!-- Code for search bar -->

<!-- <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </form> -->