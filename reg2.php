<?php
if(! preg_match("/[a-z]/i",$_POST["password"]))
{
    die("Password must be have atleast 1 letter!");
}
if(! preg_match("/[0-9]/",$_POST["password"]))
{
    die("Password must be have atleast 1 number!");
}
if($_POST["password"] != $_POST["confirm_password"]){
    die("Password must be same!");
}
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/regis.php";
$sql = "INSERT INTO user1 (First_Name, Last_Name, username, password_hash, Aadhar_No, Gender, email_id, Mobile, City, State)
VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql)){
    die("SQL ERROR!" . $mysqli->error);
}

$stmt->bind_param("ssssssssss",
$_POST["First_Name"],
$_POST["Last_Name"],
$_POST["username"],
$password_hash,
$_POST["Aadhar_No"],
$_POST["Gender"],
$_POST["email_id"],
$_POST["Mobile"],
$_POST["City"],
$_POST["State"]);

if($stmt->execute()){
//echo "Sign-up successfully";
header("Location: signup_success.html");
exit;
}

else{
    die($mysqli->error . " " . $mysqli->errno);
}

//print_r($_POST);
//var_dump($password_hash);
?>