<?php
//require 'lib/function.php';
//require 'lib/user.php';
if (isset($_POST['btn_submit'])) {
    $error = array();
    //
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Tên người dùng không được trống";
    } else {
        
                $fullname = $_POST['fullname'];
                // echo $fullname;
            }
    //
    if (empty($_POST['email'])) {
        $error['email'] = "Email không được trống";
    }  else {
                $email = $_POST['email'];
                //echo $password . "<br>";
            }
    //
    $mess =array();
    if (empty($error)) {
            $mess['mess'] = "chào bạn {$fullname} email của bạn là {$email}";
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>INFO USER</title>
</head>

<body>
    <div id="wrapper">
        <form action="" method="POST">
            <h1>Thông Tin Người dùng</h1>
            <form action="" method="POST">
                Name:<br><input type="text" name="fullname"><br><br>
                <P class="error"><?php if (!empty($error['fullname'])) {
                                        echo $error['fullname'];
                                    } ?></P>
                Email:<br><input type="email" name="email"><br><br>
                <P class="error"><?php if (!empty($error['email'])) {
                                        echo $error['email'];
                                    } ?></P>
                <P class="error"><?php if (!empty($mess['mess'])) {
                                        echo $mess['mess'];} ?></P>
                <input type="submit" name="btn_submit" value="submit">
            </form>
        </form>
    </div>
</body>

</html>