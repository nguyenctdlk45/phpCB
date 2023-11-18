<?php
# Bai 1: xây dựng hàm kiểm tra số chẵn
// function check_even($n)
// {
//     if ($n % 2 == 0) {
//         return true;
//     } else return false;
// }
// $n = 6;
// if (check_even($n) == true) {
//     echo "{$n} là số chẵn";
// } else echo "{$n} là số lẻ";
# Bai 2: Tính tổng các số nguyên tố từ 2 -> n
// function check_prime($n)
// {
//     for ($i = 2; $i <= sqrt($n); $i++) {
//         if ($n % $i == 0) {
//             return false;
//         } 
//     }return true;
// }

// function total_prime($n)
// {
//     $t = 0;
//     for ($i = 2; $i <= $n; $i++) {
//         if (check_prime($i) == true) {
//             echo "$i <br>";
//             $t += $i;

//         }
//     }
//     return $t;
// }
// echo total_prime(8);
# Bài 3: Hàm lấy thông tin chi tiết một bài viết theo id trong mảng bài viết
function showArray($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
$list_info = array(
    1 => array(
        'id' => '1',
        'email' => 'nguyenb1906725@student.ctu.edu.vn',
        'fullname' => 'Nguyen Chi Nguyen'
    ),
    2 => array(
        'id' => '2',
        'email' => 'thanhb1906725@student.ctu.edu.vn',
        'fullname' => 'Nguyen Chi thanh'
    ),
);
// Cách 1
// function get_post_by_id($id){
//     global $list_info;
//     foreach ($list_info as $key=>$item){
//         if($key==$id){
//             return $list_info[$id];
//         }
//     } return false;
// }
// Cách 2
function get_post_by_id($id)
{
    global $list_info;
    if (array_key_exists($id, $list_info)) {
        return $list_info[$id];
    }
    return false;
}
$item = get_post_by_id(2);
showArray($item);
