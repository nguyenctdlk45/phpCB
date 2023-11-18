<?php
require'db/connect.php';
// $sql = "SELECT COUNT(id_user) FROM `tbl_users`";
$sql = "SELECT SUM(id_user) as`sum` FROM `tbl_users`";

$result = mysqli_query($conn, $sql);
$num_user = mysqli_fetch_assoc($result) ;
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
    Số bản ghi : <?php //print_r ($num_user->fetch_row()) ; 
    echo $num_user['sum'];
    ?>
</body>
</html>