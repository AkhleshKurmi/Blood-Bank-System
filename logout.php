<?php
 include('connection.php');
session_start();
$uname = $_SESSION['uname'];
session_destroy();

header('location:index.php');

?>