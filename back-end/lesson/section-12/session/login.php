<?php
function showArray($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
if (isset($_POST['btn_login'])) {
    $infor = array(
        'username' => 'admin',
        'password' => 'admin123'
    );
    //mảng kiểm tra lỗi
    $error = array();
    //Kiểm trả xem username có trống hay không
    if (empty($_POST['username'])) {
        $error['username'] = "Tên tài khoản không được rỗng";
    } else {
        $username = $_POST['username'];
    }
    //Kiểm trả xem password có trống hay không
    if (empty($_POST['password'])) {
        $error['password'] = "Mật khẩu không được rỗng";
    } else {
        $password = $_POST['password'];
    }
    // Nếu error không có  lỗi thì kiểm tra mật khẩu và tài khoản
    if (empty($error)) {
        if ($username == $infor['username'] && $password == $infor['password']) {
            // Nếu đúng thì chuyển hướng
            //$redirect_to = $_POST['redirect_to'];
            session_start();
            $_SESSION['is_login']= true;
            $_SESSION['user_login']=$infor['username'];
            ob_start();
            header("location: index.php");
        } 
        //nếu sai thì cập nhật thêm mảng error
        else {
            $error['login'] = "Tài khoản hoạc mật khẩu chưa chính xác";
        }
    }
    // Nếu mảng error có lỗi thì in ra
    if (!empty($error)) {
        ShowArray($error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        Name:<br><input type="text" name="username"><br><br>
        password:<br><input type="password" name="password"><br><br>
        <input type="hidden" name="redirect_to" value="card.php">
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>