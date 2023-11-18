<?php
function redirect ($url='?mod=home&act=main'){
    if(!empty($url)){
        header("location: {$url}");
    }
}