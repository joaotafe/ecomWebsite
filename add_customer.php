<?php 
//Connect to database
ini_set('display_errors', 'On');
$conn = mysqli_connect("localhost:3308", "root", "", "recordplayerdb");
if ($conn)
{
  return mysqli_connect_errno();
}
?>