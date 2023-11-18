<?php

require 'db/config.php';
require 'db/database.php';
require('helper/format.php');
db_connect($config);
$active_token = $_GET['active_token'];
if(active_action($active_token)){
    $error['active_token']="Kích hoạt tài khoản thành công";
}else{
    $error['active_token']="Lỗi: tài khoản đã được kích hoạt trước đó";

}
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
    <script>
        window.alert("<?php if(!empty($error)){ echo $error['active_token'];} ?>");
    </script>
</body>
</html>