<?php
$list_info = array(
    1 => array(
    'id' => '1',
    'email'=>'nguyenb1906725@student.ctu.edu.vn',
    'fullname' => 'Nguyen Chi Nguyen'),
    2 => array(
        'id' => '2',
        'email'=>'thanhb1906725@student.ctu.edu.vn',
        'fullname' => 'Nguyen Chi thanh'),
);
//them mot mang vao mang da chieu
$list_info[3] = array(
        'id' => '3',
        'email'=>'Hoab1906725@student.ctu.edu.vn',
        'fullname' => 'Nguyen Chi Hoa'
);


#lay thong tin  tu mang
$info = $list_info[3];
#Duyet mang mot chieu
// foreach($info as $item){
//     echo $item."<br>";
// };
# Duyet mang da chieu
foreach($list_info as $key=>$item){
    // echo "<pre>";
    // print_r($item);
    // echo "</pre>";
    echo "{$key}=>{$item['id']}"."<br>";
    echo $item['email']."<br>";
    echo $item['fullname'];
    echo"<br>"."_____________"."<br>";
};
