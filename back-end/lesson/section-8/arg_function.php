<?php
# Hàm một tham số

function check_even($n){
    if($n%2==0){
        echo "{$n}: Là số chẵn";
    }
}
# Hàm hai tham số

function sum($a,$b){
    $t = $a +$b;
    echo $t;
}
# Hàm tham số tự động
// Hàm in mảng
function showArray($data){
    if(is_array($data)){
        echo "<pre>";
        //print_r($data);
        foreach ($data as $item){
            echo "<br>$item";
        }
        echo "</pre>";
    }
}
//Hàm tính tổng một hoạc nhiều số
function sumMultiNumber(){
    $list_arg = func_get_args();
    $t = 0;
    foreach($list_arg as $value){
        $t +=$value;
    }
    showArray($list_arg);
    echo "Tổng bằng: {$t}";
}
sumMultiNumber(2,5,3);