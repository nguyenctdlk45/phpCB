<?php
session_start();
ob_start();
unset($_SESSION['is_login']);
unset($_SESSION['use_login']);
header("location: login.php");
?>