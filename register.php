<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoI..." crossorigin="anonymous" />
</head>

<?php

//errors
$errGivName = "";
$errFamName = "";
$errDateOfBirth = "";
$errEmail = "";
$errPassword = "";
//values
$givName = "";
$famName = "";
$dateOfBirth = "";
$email = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["reset"])) {
    header("Refresh:0");
    exit();
  }
  $givName = checkInput($_POST["regGivName"]);
  $famName = checkInput($_POST["regFamName"]);
  $dateOfBirth = checkInput($_POST["regDateOfBirth"]);
  $email = checkInput($_POST["regEmail"]);
  $password = checkInput($_POST["regPassword"]);

  $errGivName = "";
  $errFamName = "";
  $errGivName = "";
  $errDateOfBirth = "";
  $errEmail = "";
  $errPassword = "";

  $validData = true;

  if ($givName == "") {
    $errGivName = "Given name must not be blank";
    $validData = false;
  }
  if ($famName == "") {
    $errFamName = "Fam name must not be blank";
    $validData = false;
  }
  if ($dateOfBirth == "") {
    $errDateOfBirth = "Date of birth must not be blank";
    $validData = false;
  }
  if ($email == "") {
    $errEmail = "Email address must not be blank";
    $validData = false;
  }
  if ($password == "") {
    $errPassword = "Password must not be blank";
    $validData = false;
  }

  if ($validData) {
    include("add_customer.php");
    exit();
  }
}
function checkInput($inputData)
{
  $inputData = trim($inputData);
  $inputData = stripslashes($inputData);
  $inputData = strip_tags($inputData);
  $inputData = htmlspecialchars($inputData);
  return $inputData;
}
?>

<body>
  <div class="container-fluid bg-primary-subtle" id="fatherContainer">
    <nav class="navbar fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <h2>The Record Player</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
              Dark offcanvas
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body text-bg-light">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  My Account
                </a>
                <ul class="dropdown-menu dropdown-menu-primary">
                  <li>
                    <a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#signInForm" aria-expanded="false" aria-controls="signInForm">
                      Sign In
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li><a class="dropdown-item" href="#">Register</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="formDisplay" style="margin-top: 2%; padding-top: 8%; padding-bottom: 15%">
      <div class="row">
        <div class="col-md-3 bg-primary-subtle">
          <!-- Side navigation items can be added here if needed -->
        </div>
        <div class="col-md-6 text-center">
          <!-- Display of products can be added here -->
          <h1>Registration Form</h1>
          <form method="POST" action="">
            <div class="form-floating md-3">
              <input class="form-control" type="text" id="regGivName" name="regGivName" value="<?php echo $givName; ?>" placeholder="Enter given name" />
              <label for="regGivName">Given Name:</label>
              <div class="error-message"><?php echo $errGivName; ?></div>
            </div>

            <div class="form-floating md-3">
              <input class="form-control" type="text" id="regFamName" name="regFamName" value="<?php echo $famName; ?>" placeholder="Enter family name" />
              <label for="regFamName">Family Name:</label>
              <div class="error-message"><?php echo $errFamName; ?></div>
            </div>

            <div class="form-floating md-3">
              <input class="form-control" type="date" id="regDateOfBirth" name="regDateOfBirth" value="<?php echo $dateOfBirth; ?>" placeholder="Enter date of birth" />
              <label for="regDateOfBirth">Date of Birth:</label>
              <div class="error-message"><?php echo $errDateOfBirth; ?></div>
            </div>

            <div class="form-floating md-3">
              <input class="form-control" type="email" id="regEmail" name="regEmail" value="<?php echo $email; ?>" placeholder="Enter email" />
              <label for="regEmail">Email Address:</label>

              <div class="error-message"><?php echo $errEmail; ?></div>
            </div>

            <div class="form-floating md-3">
              <input class="form-control" type="password" id="regGivName" name="regPassword" value="<?php echo $password; ?>" placeholder="Enter password" />
              <label for="regPassword">Password:</label>
              <div class="error-message"><?php echo $errPassword; ?></div>
            </div>
            <br>
            <div>
              <button type="submit" class="btn btn-secondary">
                Register
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-3">
          <!-- Display of products can be added here -->
        </div>
      </div>
    </div>
    <div class="p-3 text-center fixed-bottom">
      <p>All Rights Reserved© - Designed by Luca Souza - 2023</p>
    </div>
  </div>
  <!-- JavaScript Bootstrap link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>