<?php
session_start();
//PRINT_R($_SESSION);
if (isset($_SESSION["user_id"]))
{
    $mysqli = require __DIR__ . "/regis.php";
    $sql = "SELECT * FROM user1
    WHERE id ={$_SESSION["user_id"]}";
    $result=$mysqli->query($sql);
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Why choosing to Rail Safar.in?</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        img.one {
            height: 5%;
            width: 5%;
        }
        img.two {
            height: 5%;
            width: 5%;
        }
        img.three {
            height: 5%;
            width: 5%;
        }
        img.four {
            height: 5%;
            width: 5%;
        }
    </style>
</head>
<body>
    <img src="/HTML_Tutorial/Rail_Safar.png" alt="stats" align="left" width="125"/>
    <img src="/HTML_Tutorial/irctc_logo.png" alt="stats" align="right" width="100"/>
    <div>
        <center><header style="font-size: xx-large; font-family: BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"><br/>Rail Safar.in</header></center>
        <center><H5 style="font-family: Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">(Authorised Online Rail Booking Site under IRCTC)</H5></center>
    </div><br/><br/>
    <?php if (isset($user)): ?>
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#" style="color: orange; font-stretch: extra-expanded;">Rail Safar.in</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="\HTML_Tutorial\index1.php "style="color: greenyellow; font-family: cursive;">Home</a></li>
            <li class = "active"><a href="#" style="color: greenyellow; font-family: cursive;">Why Us</a></li>
            <li><a href="\HTML_Tutorial\Book_1.php" style="color: greenyellow; font-family: cursive;">Book Ticket</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href=""><span class="glyphicon glyphicon-user"></span> Hello <?= htmlspecialchars($user["id"])?></a></li>
        <li><a href="\HTML_Tutorial\logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
    </div>
    </nav>

    <?php else: ?>
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#" style="color: orange; font-stretch: extra-expanded;">Rail Safar.in</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="\HTML_Tutorial\index1.php" style="color: greenyellow; font-family: cursive;">Home</a></li>
            <li class="active"><a href="#" style="color: greenyellow; font-family: cursive;">Why Us</a></li>
            <li><a href="\HTML_Tutorial\Book_1.php" style="color: greenyellow; font-family: cursive;">Book Ticket</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="\HTML_Tutorial\register.html"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
            <li><a href="\HTML_Tutorial\login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
        </ul>
        </div>
    </nav>
    <?php endif; ?>
    <div class="container">
        <main>
            <h3>Why Us?</h3><hr>
            <p style="font-size: medium;">
                <img class="one" src="https://images.ixigo.com/image/upload/f_auto/train/ecb835b55223186c49d55750b422ed10-oscpe.png">  ₹0 Payment Gateway Fee on Payments via UPI.
            </p>
            <p style="font-size: medium;">
                <img class="two" src="https://images.ixigo.com/image/upload/f_auto/801ca10aa0964d95bdcd76df1573b5e1-hlzsy.png">  Rail Safar Assured: Free Cancellation of Train Tickets.
            </p>
            <p style="font-size: medium;">
                <img class="three" src="https://images.ixigo.com/image/upload/f_auto/train/a21427142a38e7331574b034aa4a687a-lwpxr.png">  Instant Refund on Indian Railway Reservation Cancellation.
            </p>
            <p style="font-size: medium;">
                <img class="four" src="https://images.ixigo.com/image/upload/f_auto/train/d522fcf3866c18b343060ab3cb49b3b1-xnmqx.png">  24*7 Support for IRCTC Train Ticket Booking.
            </p>
            <hr></main>
        <footer><center>&copy; Rail Safar Tech. Ltd. India. All brands are trademarks of their respective owners.</center></footer>
    </div>
</body>
</html>