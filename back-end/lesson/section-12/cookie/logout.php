<?php
session_start();
ob_start();
setcookie('is_login',true,time()-3600);
setcookie('user_login',$infor['username'],time()-3600);
unset($_SESSION['is_login']);
unset($_SESSION['use_login']);
header("location: login.php");
?>