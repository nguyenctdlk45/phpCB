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

#xoa mang
// unset($list_info);
#xoa phan tu trong mang mot chieu
//$info = $list_info[3];
//unset($infor['email']);
#xoa phan tu trong mang nhieu chieu
unset($list_info[1]['fullname']);
echo "<pre>";
print_r($list_info);
echo "</pre>";
