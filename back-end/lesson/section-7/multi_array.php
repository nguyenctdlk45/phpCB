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
// echo "<pre>";
// print_r($list_info);
// echo "</pre>";

#lay thong tin  tu mang
$info = $list_info[3];
echo "<pre>";
print_r($info);
echo "</pre>";
//cach 1
echo $info['id'];
echo"<br>";
//cach 2
echo $list_info[3]['id'];