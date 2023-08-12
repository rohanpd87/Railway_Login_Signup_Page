<?php
define('DB_SERVER', 'localhost:3309');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'rail_reserve');
//Try connecting to database
$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
//checking connection
if($conn==false)
{
    dir('Error: Cannot connect');
}
?>