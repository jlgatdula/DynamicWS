<?php

include_once("connect.php");
require("market.html"); //shows the buttons
//retrieves all entries upon connection to project
$query=("SELECT * FROM receipt");
$result=mysqli_query($link, $query);
echo "Customers' Infomation Table (Customer, Cashier, Item, Quantity, Price)";
echo "<br>";
//prints the whole table
print "<table border='1'\n";
while ($a_row = mysqli_fetch_row($result)){
	print "<tr>\n";
	foreach($a_row as $field){
		print "\t<td>".$field."</td>\n";
	}
	print "<tr>\n";
}
print "</table>\n";

mysqli_close($link);
?>