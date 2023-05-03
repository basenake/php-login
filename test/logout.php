<?php
include_once('comn.php');

// echo "以登出使用者" .$_SESSION['name'];

// unset($_SESSION['name']);
unset($_SESSION['error']);
unset($_SESSION['logout']);
header("location:login.php");





?>