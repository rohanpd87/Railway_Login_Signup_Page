<?php
$host="localhost:3309";
$dbname="rail_reserve";
$username="root";
$password="";

$mysqli = new mysqli(
    hostname: $host,
    username: $username, password:$password,
    database: $dbname
);

if ($mysqli->connect_errno){
    die("Connection Error:". $mysqli->connect_error);
}
return $mysqli;
?>