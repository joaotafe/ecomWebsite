<?php
//Start the session
session_start();
include 'cart.php';
$cart = new ShoppingCart();
$counter= $_SESSION['shopping_cart'];
    
?>
<html>
<body>

<?php
//check whether the cart is empty or not

    $cart = unserialize($_SESSION['shopping_cart']);
    //print_r($cart);
    $depth = $cart->get_depth();
  
    //Get the depth of the cart
	
    echo"<h1>Shopping Cart</h1>";
    echo "<table border=1>";
    echo"<tr><td><b>product Name</b></td><td><b>Quantity</b></td><td><b> Price</b></td></tr>";
	//Use a for loop to Iterate through the cart
    for ($i=0; $i < $depth; $i++) {
        $product = $cart->getProduct($i);
		$product_id = $product->getRecordID();
		$product_name = $product->getTitle();
		$qty = $product->getQty();
		$unit_price = $product->getPrice();
		echo "<tr><form  action=remove_from_cart.php method=POST>";
		echo"<td>$product_name</td><td>$qty </td><td>$unit_price</td>";
		echo "<td> <input name= product_no type=checkbox id= product_no value=$i></td>";
		echo"<td><INPUT  name=remove TYPE=submit id=remove value=Remove></td>";
		echo "</tr></form>";
        
    }

    echo "</table>";
    echo"<p><b> <a href=checkout.php>Checkout </a> </b></p>";
    echo"<p><b> <a href=index.php>Go back to products </a> </b></p>";
	?>
</body>
</html>