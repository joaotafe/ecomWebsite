<?php
//Start the session
session_start();
include 'cart.php';
$cart = new ShoppingCart();
$counter= $_SESSION['shopping_cart'];
$total_price = 0;
//check whether the cart is empty or not
if ($counter == 0)
    echo"<br><br><p><b> Your Shopping Cart is empty !!! </b></p>";
else {
    $cart = unserialize($_SESSION['shopping_cart']);
    $depth = $cart->get_depth();
    echo"<h1>Shopping Cart</h1>";
    echo "<table border=1>";
    echo"<tr><td><b>Product Name</b></td><td><b>Quantity</b></td><td><b> Price</b></td></tr>";
	//Use a for loop to Iterate through the cart
    for ($i = 0; $i < $depth; $i++) {
        $product = $cart->getProduct($i);
		$product_id = $product->getRecordID();
		$product_name = $product->getTitle();
		$qty = $product->getQty();
		$unit_price = $product->getPrice();
		//Calculate the total price
		$total_price = $total_price + $unit_price*$qty;
		echo"<tr><td>$product_name</td><td>$qty </td><td>$unit_price</td></tr>";
        }
    
   //Display the total price
    $_SESSION['total_price'] = $total_price;
    echo"<tr><td><b> Total </b></td><td>&nbsp;</td><td><b>$total_price</b></td></tr>";
    echo "</table>";
    echo"<p><b> <a href=view_cart.php>Remove prices from the Cart </a> </b></p>";
    echo"<p><b> <a href=payments.php>Proceed with Payments</a> </b></p>";
    echo"<p><b> <a href=products.php>Go back to products </a> </b></p>";
}
?>