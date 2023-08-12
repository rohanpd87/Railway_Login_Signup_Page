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
            <li class="active"><a href="#" style="color: greenyellow; font-family: cursive;">Home</a></li>
            <li><a href="\HTML_Tutorial\Home_2.php" style="color: greenyellow; font-family: cursive;">Why Us</a></li>
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
            <li class="active"><a href="#" style="color: greenyellow; font-family: cursive;">Home</a></li>
            <li><a href="\HTML_Tutorial\Home_2.php" style="color: greenyellow; font-family: cursive;">Why Us</a></li>
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
            <h3>About Us...</h3><hr>
            <p style="font-size: medium;">Launched in 2023, Rail Safar.in is a technology company focused on empowering Indian travellers to plan, book and manage their trips across rail. We assist travellers in making smarter travel decisions by leveraging artificial intelligence, machine learning, and data science led innovations on our OTA platforms, comprising our websites and mobile applications. Our vision is to become the most customer-centric travel company, by offering the best customer experience to our users. Our focus on travel utility and customer experience for travellers in the 'next billion user' segment is driven by technology, cost-efficiency and our culture of innovation has made us India's leading travel ecosystem for the 'next billion users'.</p>
            <br/>
            <p style="font-size: medium;">Our OTA platforms allow travellers to book train tickets, while providing travel utility tools and services developed using  crowd-sourced information, including train PNR status and confirmation predictions, & train seat availability. Read our travel stories where we cover everything related to Indian Railways reservation updates, COVID-19 Travel Guidelines And Restrictions and more. Let us help  you plan your next vacation. Explore our website today.</p><hr></main>
        <footer><center>&copy; Rail Safar Tech. Ltd. India. All brands are trademarks of their respective owners.</center></footer>
    </div>
</body>
</html>