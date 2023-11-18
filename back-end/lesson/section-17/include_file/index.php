<?php
require 'inc/header.php';
?>
<?php
$mod = !empty($_GET['mod'])?$_GET['mod']:'home';
$act = !empty($_GET['act'])?$_GET['act']:'main';

$path = "modules/{$mod}/{$act}.php";

if(file_exists($path)){
    require $path;
}else echo"Trang nay khoong ton tai";

?>
<?php
require 'inc/footer.php';
?>