<?php
include_once("connect.php");
require("market.html");
echo "<br>";

$customer = $_POST['customer'];
$query=("DELETE FROM receipt WHERE customer='$customer'");
print "Entries of \"$customer\" has been deleted.";
mysqli_query($link, $query);

$query=("SELECT * FROM receipt");
$result=mysqli_query($link, $query);

mysqli_close($link);
?>