<?php
session_start();
session_destroy();
header("Location: index1.php");
header("Location: Book_1.php");
header("Location: Home_2.php");
exit;
?>