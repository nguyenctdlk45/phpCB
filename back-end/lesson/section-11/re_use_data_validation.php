<?php
if(isset($_POST['btn_reg'])){
    $error =array();
//
    if(empty($_POST['fullname'])){
        $error['fullname']= "Họ và tên không được trống";
    }else{
        $fullname= $_POST['fullname'];
    }
    if(empty($_POST['gender'])){
        $error['gender'] = "Hãy chọn giới tính";
    }else{
        $gender= $_POST['gender'];
    }
    if(empty($error)){
        echo $fullname."<br>";
        echo $gender."<br>";
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
        p.error{
            color: red;
        }
    </style>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        Họ và tên:<br><input type="text" name="fullname" value="<?php if(!empty($fullname)){echo $fullname;} ?>"><br>
        <P class="error"><?php if(!empty($error['fullname'])){ echo $error['fullname'];} ?></P>
        <select name="gender">
            <option value="">--chọn--</option>
            <option value="male" <?php if(!empty($gender)&& $gender=='male'){echo"selected= 'selected'";} ?>>Nam</option>
            <option value="female" <?php if(!empty($gender)&& $gender=='female'){echo"selected= 'selected'";} ?>>Nữ</option>
        </select><br>
        <P class="error"><?php if(!empty($error['gender'])){ echo $error['gender'];} ?></P><br>
        <input type="submit" name="btn_reg" value="register">
    </form>
</body>

</html>