<?php
# trả về trong hàm
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
# Trả dữ lữ liệu thông qua return
function sum($a,$b){
    $t = $a +$b;
    return $t;
}
$t = sum(3,5);
echo "{$t}";