<?php

use GuzzleHttp\Promise\Is;

function add_cart($id)
{
    global $list_product;
    $item = get_product_by_id($id);

    $qty = 1;
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'product_thumb' => $item['product_thumb'],
        'code'=>$item['code'],
        'qty' => $qty,
        'sub_total' => ($item['price'] * $qty)
    );
    # cap nhat lai gio hang
    update_info_cart();
}
function update_info_cart()
{
    if (isset($_SESSION['cart'])) {

        $num_oder = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_oder += $item['qty'];
            $total += $item['sub_total'];
        }

        $_SESSION['cart']['info'] = array(
            'num_order' => $num_oder,
            'total' => $total
        );
    };
}

function delete_cart($id){
    if(isset($_SESSION['cart'])){
        if(!empty($id)){
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        }else{
        unset($_SESSION['cart']);}
    }
}

function update_cart($qty){
    foreach($qty as $id =>$new_qty){
        $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $_SESSION['cart']['buy'][$id]['price'] * $new_qty;
    }
    update_info_cart();
}