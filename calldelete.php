<?php
echo "hi";
$host="127.0.0.1";
$user="root";
$pass="";
$db="us2";
$conn = mysql_connect($host,$user,$pass);
            
if(! $conn ) 
{
 die('Could not connect: ' . mysql_error());
}
mysql_select_db($db);
session_start();
?>