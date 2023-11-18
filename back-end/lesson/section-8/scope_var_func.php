<?php
$a = 10;
$b = 20;
function sum(){
    global $a, $b;// có thể lấy biến từ ngoài vào hàm nhờ global
    $t = $a +$b;
    return $t;
}
$t = sum(3,5);
echo "{$t}";