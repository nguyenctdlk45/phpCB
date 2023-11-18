<?php
$id = (int)$_GET['id'];
// $item = get_product_by_id($id);
add_cart($id);
redirect('?mod=cart&act=show');
