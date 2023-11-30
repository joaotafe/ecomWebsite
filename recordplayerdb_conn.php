<?php
//Data access class
$server = "localhost:3308";
$user = "root";
$pass = "";
$database = "recordplayerdb";
//Connect to the MySQL server/db
//$mysqli = mysqli_connect($server,$user,$pass,$database) or die ("Error connecting to the database");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try 
{
    $mysqli = new mysqli($server,$user,$pass,$database);
}
catch (Exception $ex)
{
    error_log($ex->getMessage());
    exit("Error connecting to the database");
}
?>