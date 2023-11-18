<?php
$conn= mysqli_connect('localhost','root','','cbphp');
if(!$conn){
    die("Kết nối không thành công".mysqli_connect_errno());
}
else{
    echo "Kết nối thành công";
}