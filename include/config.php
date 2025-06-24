<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'Googleme240');
define('DB_NAME', 'myhmsdb');
$con = mysqli_connect("localhost","root","Googleme240","myhmsdb");
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>