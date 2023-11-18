<?php
// $list_users = array(
//     1 => array(
//     'id' => '1',
//     'email'=>'nguyenb1906725@student.ctu.edu.vn',
//     'fullname' => 'Nguyen Chi Nguyen',
//     'username' => 'nguyenasd',
//     'password'=> md5('Nguyen!@#')
// ),
//     2 => array(
//         'id' => '2',
//         'email'=>'thanhb1906725@student.ctu.edu.vn',
//         'fullname' => 'Nguyen Chi thanh',
//         'username' => 'thanhasd',
//         'password'=> md5('Thanh!@#')
//     ),
//     3 => array(
//         'id' => '3',
//         'email'=>'thanhb1906725@student.ctu.edu.vn',
//         'fullname' => 'Nguyen Chi Van',
//         'username' => 'vanasd',
//         'password'=> md5('Van!@#')
//     )
// );
$conn = mysqli_connect('localhost','root','','cbphp');
// $sql = "SELECT * FROM  `tbl_users`";
// $result = mysqli_query($conn,$sql);
// $list_users = array();
// if(mysqli_num_rows($result)>0){
//     while($row = mysqli_fetch_assoc($result){
//         $list_users[]= $row;
//     }
// }
$sql = "SELECT * FROM `tbl_users`";
$result = mysqli_query($conn, $sql);
$list_users = array();
$num_user= mysqli_num_rows($result);
if ($num_user > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_users[] = $row;
    }
}
