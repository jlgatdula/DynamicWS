<?php
include_once("connect.php");
require("market.html");
//if user = root, connects to mysql and project
echo "<br>";

$customer = $_POST['customer'];
$cashier = $_POST['cashier'];
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

//adds entries
$query=("INSERT INTO receipt (customer,cashier,item,quantity,price)
VALUES('$customer','$cashier','$item','$quantity','$price')");
print "'$customer' has been added";
mysqli_query($link, $query);

$query=("SELECT * FROM pet");
$result=mysqli_query($link, $query);

mysqli_close($link);
?>