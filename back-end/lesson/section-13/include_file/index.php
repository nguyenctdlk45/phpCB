<?php
require 'inc/header.php';
?>
<?php
$page = !empty($_GET['page'])?$_GET['page']:'home';

$path = "pages/{$page}.php";

if(file_exists($path)){
    require $path;
}else echo"Trang nay khoong ton tai";

?>
<?php
require 'inc/footer.php';
?>