<?php

$num_order = $_POST['num_order'];
$price = $_POST['price'];
$total = $price * $num_order;

echo $total;