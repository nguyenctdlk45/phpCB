<?php
$info = array(
    'id' => '1',
    'email'=>'nguyenb1906725@student.ctu.edu.vn',
    'fullname' => 'Nguyen Chi Nguyen'
);
//them key xac dinh
$info['phone'] = '0973662955';
// echo "<pre>";
// print_r($info);
// echo "</pre>";
// them khi mac dinh
$list_prime = array(2,3,5,7,9);
$list_prime[] = '11';
// echo "<pre>";
// print_r($list_prime);
// echo "</pre>";
// lay gia tri
// echo $info['phone'];
// cập nhật thông tin mảng
$info ['fullname'] = 'Nguyen Van A';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <strong style="size: 30px;">THÔNG TIN NGƯỜI DÙNG</strong>
    <p> Tên: <strong><?php echo $info['fullname']; ?></php></strong></p>
    <p> SĐT: <strong><?php echo $info['phone']; ?></php></strong></p>
    <p> Email: <strong><?php echo $info['email']; ?></php></strong></p>

</body>
</html>