<?php
 
//Connect to the database
    $host = "127.0.0.1";
    $user = "highdensity";  //Your Cloud 9 username
    $pass = "breaking";     //Remember, there is NO password by default!
    $db = "project";        //Your database name you want to connect to
    $port = 3306;           //The port #. It is always 3306 when using c9.io
    
    $link = mysqli_connect($host, $user, $pass, $db, $port)
    or die(mysql_error());
//<?php
/*$username = $_POST['username'];
$password = $_POST['password'];*/

//Connection to MySQL server
//$link = mysqli_connect("localhost","","","menagerie1");
/*if (!$link){
	echo 'You are connected to MySQL.';
}
else{
	echo "Couldn't connect to MySQL.";
}*/

?>