<?php

function construct()
{
    //echo "DÙng chung, load đầu tiên";
    // load_model('index');
    //get_header();
    
}

function indexAction()
{
    //     load('helper','format');
    //     $list_users = get_list_users();
    // //    show_array($list_users);
    //     $data['list_users'] = $list_users;
    // load_view('index');
}

// function addAction() {
//     echo "Thêm dữ liệu";
// }

// function editAction() {
//     $id = (int)$_GET['id'];
//     $item = get_user_by_id($id);
//     show_array($item);
// }
function listuserAction(){
    load_view('index');
}
