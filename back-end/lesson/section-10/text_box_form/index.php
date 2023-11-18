<?php
if (isset($_POST['btn_login'])) {
    // echo $_POST['username'];
    if (empty($_POST['username'] && $_POST['password'])) {
        echo "Tên tài khoản không được rỗng";
    } else {
        echo $_POST['username'];
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