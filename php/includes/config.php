<?php
define('DB_SERVER','10.0.0.169');
define('DB_USER','anuj.lpu1@gmail.com');
define('DB_PASS' ,'Test@123');
define('DB_NAME', 'shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>