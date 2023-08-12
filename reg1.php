<?php
$First_Name=$_POST["First_Name"];
$Last_Name=$_POST["Last_Name"];
$username=$_POST["username"];
$password=$_POST["password"];
$confirm_password=$_POST["confirm_password"];
$Aadhar_No=$_POST["Aadhar_No"];
$Gender = $_POST["Gender"];
$email_id=$_POST["email_id"];
$Mobile=$_POST["Mobile"];
$City=$_POST["City"];
$State=$_POST["State"];
$Terms=filter_input(INPUT_POST, "Terms", FILTER_VALIDATE_BOOL);

if(! $Terms){
    die("Terms must be accepted!!!");
}

//var_dump($First_Name, $Last_Name, $username, $password, $Aadhar_No, $Gender, $Mobile, $City, $State, $Terms);

$host="localhost:3309";
$dbname="rail_reserve";
$username="root";
$password="";

$conn = mysqli_connect
(
    hostname: $host, username: $username, password:$password, database: $dbname
);
if (mysqli_connect_errno())
{
    die("Connection Error:". mysqli_connect_error());
}
//echo "Connection Successful!!!";

$sql = "INSERT INTO users(First_Name, Last_Name, username, password, Aadhar_No, Gender, email_id, Mobile, City, State)
VALUES(?,?,?,?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if(! mysqli_stmt_prepare($stmt, $sql))
{
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssssssss",
$First_Name, $Last_Name, $username, $password, $Aadhar_No, $Gender, $email_id, $Mobile, $City, $State);

mysqli_stmt_execute($stmt);
echo "Congratulation! You've been registered!";
//VALUES ('$First_Name', '$Last_Name', '$username', '$password', '$Aadhar_No', $Gender, '$Mobile', '$City', '$State');