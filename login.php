<?php
//Connect to the database
    $host = "127.0.0.1";
    $user = "highdensity";  //Your Cloud 9 username
    $pass = "breaking";     //Remember, there is NO password by default!
    $db = "project";        //Your database name you want to connect to
    $port = "3306";           //The port #. It is always 3306 when using c9.io
    
    $link = mysqli_connect($host, $user, $pass, $db, $port)
    or die(mysql_error());
    if($link){
        echo "You're connected to SQL.";
        echo "<br>";
    }
?>
<html>
<a href="market.html">Home</a>
<a href="search2.php">Search Customer</a>
<a href="retrieve.php">Show Customers</a>
<a href="add2.php">Add Customer</a>
<a href="update2.php">Update Customer</a>
<a href="delete2.php">Delete Customer</a>
<hr>
</html>