<?php
include_once("connect.php");
require("market.html");
echo "<br>";
$customer = $_POST['customer'];
$cashier = $_POST['cashier'];
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
//update record
$query=("UPDATE receipt SET cashier='$cashier' WHERE customer='$customer'");
mysqli_query($link, $query);
$query=("UPDATE receipt SET item='$item' WHERE customer='$customer'");
mysqli_query($link, $query);
$query=("UPDATE receipt SET quantity='$quantity' WHERE customer='$customer'");
mysqli_query($link, $query);
$query=("UPDATE receipt SET price='$price' WHERE customer='$customer'");
mysqli_query($link,$query);
print "Information regarding all $customer's items has been updated successfully.<br>";

mysqli_query($link,$query);
mysqli_close($link);
?>