<?php
if(isset($_POST['btn_login'])){
    $error =array();
//
    if(empty($_POST['username'])){
        $error['username']= "Tài khoản không được trống";
    }else{
        $username= $_POST['username'];
    }
//
    if(empty($_POST['password'])){
        $error['password'] = "Mật khẩu không được trống";
    }else{
        $password= $_POST['password'];
    }
 //
    if(empty($error)){
        echo $username."<br>";
        echo $password."<br>";
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
    <style>
        
    </style>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        Name:<br><input type="text" name="username"><br><br>
        <P class="error"><?php if(!empty($error['username'])){ echo $error['username'];} ?></P>
        password:<br><input type="password" name="password"><br><br>
        <P class="error"><?php if(!empty($error['password'])){echo $error['password'];} ?></P>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>