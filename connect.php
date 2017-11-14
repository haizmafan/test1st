<?
$host="64.62.211.131"; // Host name.
$db_user="haizmafan@hotmail.com"; // MySQL username.
$db_password="aiyoaiyo"; // MySQL password.
$database="haizmafa_test01"; // Database name.
$link = mysql_connect($host,$db_user,$db_password);
if (!$link) {
   die('Could not connect: ' . mysql_error());
}
else
{
echo "Mysql Connected Successfully";
}
 
mysql_close($link);
?>
