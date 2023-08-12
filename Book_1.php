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
    <title>Welcome to Rail Safar.in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <img src="/HTML_Tutorial/Rail_Safar.png" alt="stats" align="left" width="125"/></a>
    <img src="/HTML_Tutorial/irctc_logo.png" alt="stats" align="right" width="100"/></body>
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
            <li><a href="\HTML_Tutorial\index1.php" style="color: greenyellow; font-family: cursive;">Home</a></li>
            <li><a href="\HTML_Tutorial\Home_2.php" style="color: greenyellow; font-family: cursive;">Why Us</a></li>
            <li class="active"><a href="#" style="color: greenyellow; font-family: cursive;">Book Ticket</a></li>
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
            <li><a href="\HTML_Tutorial\Home_2.php" style="color: greenyellow; font-family: cursive;">Why Us</a></li>
            <li class="active"><a href="#" style="color: greenyellow; font-family: cursive;">Book Ticket</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="\HTML_Tutorial\register.html"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
            <li><a href="\HTML_Tutorial\login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
        </ul>
        </div>
    </nav>
    <?php endif; ?>
    <main>
        <div class="container">
        <h3>Indian Railway Ticket Reservation</h3>
        <hr>
        <p style="font-size: medium;">Here's how to book IRCTC tickets online:</p>
        <ul style="font-size: medium;">
            <li>Open the <a href="/HTML_Tutorial/index1.php">Rail Safar.in</a> website. Click on book ticket section on nav bar.</li>
            <li>Log in using your R.S. user ID and password. Create a new R.S. username if you don't have one.</li>
            <li>Select the source and destination Indian Railway stations from the list.</li>
            <li>Pick a date of departure and travel class-AC Class, Sleeper Class.</li>
            <li>Choose your Indian Railway train and travel class based on arrivel time and travel time (in hours).</li>
            <li>Fill in the passenger details including berth perference, names of children, senior citizens.</li>
            <li>Complete the payment and reservation process using your R.S. login details. You will be redirected to R.S. website.</li>
        </ul>
        <hr>
        <P style="font-size: medium;">To book your Ticket, then <a href="/HTML_Tutorial/Search.php" style="text-decoration: underline; font-style: italic;">CLICK HERE</a>.</P>
        </div>
    </main><HR>
    <footer><center>&copy; Rail Safar Tech. Ltd. India. All brands are trademarks of their respective owners.</center></footer>
</body>
</html>