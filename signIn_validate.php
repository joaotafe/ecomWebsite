<?php
session_start(); // Start a new session

// Include database connection
 // Database credentials
 require_once("recordplayerdb_conn.php");

// Check if the form data is set
if (isset($_POST['signInEmail']) && isset($_POST['signInPassword'])) {
    $email = $_POST['signInEmail'];
    $password = $_POST['signInPassword'];

    // Prepare a SELECT statement to fetch the user with the given email
    $stmt = $mysqli->prepare("SELECT * FROM customer WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, start the session
            $_SESSION['user_id'] = $user['customerID'];
            $_SESSION['email'] = $user['email'];
            // Redirect to a logged-in page or dashboard
            header("Location: member.php");
            exit();
        } else {
            // Invalid password
            echo "Invalid password. <a href='index.php'>Try again</a>";
        }
    } else {
        // No user found with that email
        echo "No user found with that email. <a href='index.php'>Try again</a>";
    }

    $stmt->close();
} else {
    // Form data not set
    echo "Please fill in all fields. <a href='index.php'>Go back</a>";
}

$mysqli->close();
?>
