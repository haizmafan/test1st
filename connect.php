<?php
$username = "haizmafan";
$password = "aiyoaiyo";
$hostname = "	64.62.211.131"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";


mysql_close($dbhandle);

?>
