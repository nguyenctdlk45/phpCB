<?php
function show_array($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
function get_header()
{
    require 'inc/header.php';
}
function get_footer()
{
    require 'inc/footer.php';
}
function get_sidebar()
{
    require 'inc/sidebar.php';
}
function get_pages_by_id($id)
{
    global $list_pages;
    if (array_key_exists($id, $list_pages)) {
        return $list_pages[$id];
    }
}
function get_info_product_by_cat_id($cat_id)
{
    global $list_product_cat;
    if (array_key_exists($cat_id, $list_product_cat)) {
        return $list_product_cat[$cat_id];
    }
}
function get_product($cat_id)
{
    global $list_product;
    $result = array(); //mảng chứa sản phẩm theo cat_id
    foreach ($list_product as $item) {
        if ($item['cat_id'] == $cat_id) {
            $item['url'] = "?mod=product&act=detail&id={$item['id']}";
            $result[] = $item;
        }
    }
    return $result;
}
function currency_format($number)
{
    return number_format($number) . ' vnd';
}
function get_product_by_id($id)
{
    global $list_product;
    if (array_key_exists($id, $list_product)) {
        $list_product[$id]['url_add_cart']="?mod=cart&act=add&id={$id}";
        return $list_product[$id];
    }
}
function get_list_buy_cart(){
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart']['buy'] as &$item){
            $item['url_delete']="?mod=cart&act=delete&id={$item['id']}";
        }
        return $_SESSION['cart']['buy'];
    }
}
function get_num_oder_cart(){
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['info']['num_order'];
    }
}
function get_total_cart(){
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['info']['total'];
    }
}