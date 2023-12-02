<?php
//Start the session
session_start();
require_once('phpcreditcard.php');
//Read the values from the form
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$card_no = $_POST['card_no'];
$code = $_POST['code'];
$exp_date = $_POST['exp_date'];
$card_type = $_POST['card_type'];

//Validate the text fields and the credit card
if (($name == "") or ($email == "")
or ($address == "")or ($card_no == "")
or ($code == "")or ($exp_date == ""))
{
    echo"<p>Required Field(s) missing...!!!! Go back and Try again...!!!!.</p>";
}
//Vaidate the email address
elseif  (!(strstr($email, "@")) or !(strstr($email, ".")))
{
        echo"<p>Invalid Email...!!!! Go back and Try again...!!!!.</p>";
}
//Call checkCreditCard() function from phpcreditcard.php
elseif (checkCreditCard($card_no, $card_type, $ccerror, 
$ccerrortext)
 != true)
{
echo $ccerrortext;
}
else{
//If there are no errors


include 'cart.php';
$cart = new ShoppingCart();
$counter= $_SESSION['shopping_cart'];
require_once('recordplayerdb_conn.php');
require_once('gen_id.php');
$total_price = 0;   	
if ($counter==0){
echo"<br><br><p><b> Your Shopping Cart is empty !!! </b></p>";
}
else {
		//Convert the cart string to a cart object
		$cart = unserialize($_SESSION['shopping_cart']);
		$depth = $cart->get_depth();
		//Generate the order id
		$order_id = gen_id(20);
		//Use a for loop to Iterate through the cart
		for ($i=0; $i < $depth; $i++) {
			$product = $cart->getProduct($i);
			$product_id = $product->getRecordID();

			$qty = $product->getQty();
			$unit_price = $product->getPrice();

			$total_price = $total_price + ($unit_price*$qty);
			//print_r($total_price);

			//Add the record to order_line table
			//Create the insert query for the order_line table
			$query = "INSERT INTO order_line 
			VALUES(?, ?, ?)";
			try {;
				//Bind the parameters
				$stmt = $mysqli->prepare($query);
				$stmt->bind_param("sii",$order_id,$product_id,$qty);
				//Execute the query
				$stmt->execute();
			 } 
			//catch(Exception $e) {
			//   error_log($e->getMessage());
			//   exit('Error inserting to order line table'); 
			// }	

			catch (Exception $e) {
				// Output the error message for debugging purposes
				echo 'Error inserting to order line table: ' . $e->getMessage();
				// Optionally, you can also log the error
				error_log($e->getMessage());
				exit();
			}
		}
		//Add the record to order table
	
			
		$status = "paid";
	
		//Create the insert query for the order table
    	$query = "INSERT INTO orders VALUES(?,?,?,?)";
		try {
				$stmt = $mysqli->prepare($query);
				//Bind parameters
				$stmt = $mysqli->prepare($query);
				$stmt->bind_param("ssds", $order_id,$email,$total_price,$status);
				//Execute the query
				$stmt->execute();
				echo "<p> <b>Order added...... Thank you, $name!!!! Order ID:$order_id  </p>";
			} catch(Exception $e) {
			  error_log($e->getMessage());
			  exit('Error inserting to order table'); 
		}	
		
		//Email the invoice
		echo "<p>Order confirmation sent</p>";
		//Empty the cart
		$mysqli->close();
		session_destroy();
		unset($_SESSION['shopping_cart']);
		echo"<p><b> <a href=index.php>Go back to Products </a> </b></p>";
	}
}
?>