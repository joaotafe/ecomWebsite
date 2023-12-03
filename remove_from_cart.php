<?php
// // Start or resume a session

 session_start();

// // Include the classes
 include 'cart.php';

if (isset($_SESSION['shopping_cart']))
{
    $cart = unserialize($_SESSION['shopping_cart']);
    echo "Shopping Cart:";
    print_r($cart);
}
$index = $_POST['index'];
echo "Product Index:";
    print_r($index);
// } else {
//     echo "Your shopping cart is empty.";
//     exit();
// }

// if (isset($_GET['recordID'])) {
//     $recordID = $_GET['recordID'];
//     print_r($recordID);

//     // Check if the item exists in the cart
//     if ($cart->productExists($recordID)) {
//         // Remove the item from the cart
//         $cart->removeProduct($recordID);

//         // Update the shopping cart session
//         $_SESSION['shopping_cart'] = serialize($cart);

//         // Redirect back to the cart page
//         echo"<p><b> <a href=view_cart.php>Go back to Cart </a> </b></p>";
//         exit();
//     } else {
//         // Handle the case where the item is not found in the cart
//         echo "Item with ID $recordID not found in the shopping cart.";
//         exit();
//     }
// } else {
//     // Redirect to the cart page or show an error if the recordID is not provided
//     header("Location: view_cart.php");
//     //exit();
// }
echo "POST Data: ";
print_r($_POST);
?>