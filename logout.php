<?php session_start();

unset($_SESSION['message']);
unset($_SESSION['email']);

header('location: classone.php');
