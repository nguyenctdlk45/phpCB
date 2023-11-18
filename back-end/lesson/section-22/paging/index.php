<?php
require 'db/config.php';
require 'db/database.php';
require 'inc/header.php';
require 'lib/function.php';
require 'lib/paging.php';
require 'lib/url.php';

?>
<?php
db_connect($config);
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