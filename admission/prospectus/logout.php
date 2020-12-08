<?php
include("../inc/config.php");
error_reporting(E_ALL);
ini_set('display_error',1);
session_start();
unset($_SESSION['uid']);
header('location:index.php'); 
?>  