<?php
session_start();
ob_start();
#dữ liệu
require 'data/pages.php';
require 'data/product.php';
#hàm
require 'lib/function.php';
require 'lib/cart.php';
require 'lib/url.php';
?>

<?php
// get_header();
?>

<?php
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';

$path = "modules/{$mod}/{$act}.php";

if (file_exists($path)) {
    require $path;
} else echo "Trang này không tồn tại";

?>
<?php
// get_footer();
?>