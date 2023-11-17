 <?php
  $conn = mysqli_connect("localhost:3308", "root", "", "recordplayerdb");
  // Check if the form was submitted
  // Hash the password before storing it
  $hashedPassword = password_hash($_POST['regPassword'], PASSWORD_DEFAULT);

  // Prepare an INSERT statement
  $stmt = $conn->prepare("INSERT INTO customer (givenName, familyName, email, password) VALUES (?, ?, ?, ?)");

  // Bind parameters (s for string)
  $stmt->bind_param("ssss", $givName, $famName, $email, $hashedPassword);

  // Set parameters from the form data
  $givName = $_POST['regGivName'];
  $famName = $_POST['regFamName'];
  $email = $_POST['regEmail'];

  // Execute the query and check for success
  if ($stmt->execute()) {
    // Redirect to index.php
    header("Location: index.php");
    exit();
  } else {
    // Display error message and provide a link to register.php
    echo "Customer not added. Try again. <a href='register.php'>Go back to registration</a>";
  }

  // Close statement
  $stmt->close();
  ?> 