<?php
session_start();
ob_start();
if(!isset($_SESSION['is_login'])){
    header("location: login.php");
}
echo "ĐÂY LÀ TRANG CHỦ <br>";
echo "Username : ".$_SESSION['user_login'];
?>
<br>
<a href="logout.php"> logout</a>