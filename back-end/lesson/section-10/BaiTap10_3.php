<?php

if(isset($_POST['btn_login'])){
    $error =array();
    if(empty($_POST['username'])){
        $error[]= "Tài khoản không được trống";
    }else{
        $username= $_POST['username'];
    }
    if(empty($_POST['password'])){
        $error[] = "Mật khẩu không được trống";
    }else{
        $password= $_POST['password'];
    }
    if(empty($error)){
        echo $username."<br>";
        echo $password."<br>";
    }else{
        foreach($error as $item){
            echo $item."<br>";
        }
    }
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
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        Name:<br><input type="text" name="username"><br><br>
        password:<br><input type="password" name="password"><br><br>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>