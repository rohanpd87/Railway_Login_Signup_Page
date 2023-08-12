<?php
$is_invalid=false;

if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $mysqli=REQUIRE __dir__ . "/regis.php";
    $sql=sprintf("SELECT * FROM user1 WHERE username = '%s'",
    $mysqli->real_escape_string($_POST["username"]));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    //var_dump($user);
    if($user){
        if(password_verify($_POST["password"], $user["password_hash"])){
            //die("Login_Successful!");
            session_start();
            session_regenerate_id();
            $_SESSION["user_id"]=$user["id"];
            header("Location: index1.php");exit;
        }
    }
    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <style>
        body{
            background-image: url("https://www.tamilnadutourism.tn.gov.in/img/pages/large-desktop/the-nilgiri-mountain-railway-1653904566_39d2e58ed7221faa8057.webp");
            background-repeat: no-repeat;
            background-size: cover;
            max-width: 45%;
            background-attachment: fixed;
        }
        div{
            background-color: white;
        }
    </style>
</head>
<body>
    <a href="/HTML_Tutorial/index1.php"><img src="/HTML_Tutorial/Rail_Safar.png" alt="stats" align="left" width="125"/></a>
    <img src="/HTML_Tutorial/irctc_logo.png" alt="stats" align="right" width="122"/></body>
    <div>
    <center><H2 style="font-family: Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 750;">Rail Safar.in</H2></center>
    <center><H5 style="font-family: Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">(Authorised Online Rail Booking Site under IRCTC)</H5></center>
    </br></br></div>
    <div>
    <fieldset>
    <center><legend style="font-size: large;">Login to Continue</legend></center>
    <p align="right" style="font-size: medium;">All fields with * are required.</p>
    <?php if ($is_invalid): ?>
        <center><em><i><b>INVALID Login! Please try again!</b></em></i><center>
    <?php endif; ?>
    <form class="form-inline" method="POST">
        <fieldset>
            <legend>USER DETAILS</legend>
            <div><center><label for="username">*username
                <input type="text" id="username" name="username" placeholder="Enter ur user_id" minlength="3">
            </label>
            <label for="password">*Password
                <input type="password" id="password" name="password" placeholder="type pswd here" minlength="5" >
            </label>
            </center></div>
            <center><a href="/HTML_Tutorial/index1.php"><button>LOGIN</button></a></center>
        </fieldset>
        <footer><center>&copy; Rail Safar Ltd. India. All brands are trademarks of their respective owners.</center></footer>
    </form>
    </fieldset>
    </div>
</body>
</html>