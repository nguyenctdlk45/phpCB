<?php
session_start();
ob_start();
// require 'inc/header.php';
require 'data/user.php';
require 'lib/function.php';
require 'lib/user.php';
?>
<?php
$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

$path = "pages/{$page}.php";

if (file_exists($path)) {
    require $path;
} else echo "Trang nay khoong ton tai";
#nếu chưa đăng nhập và trang đang ở không phải trang đang nhập 
// if (!is_login() && $page != 'login')
//     header("location:?page=login");
?>
<?php
// require 'inc/footer.php';
?>