<?php
if(isset($_POST['btn_reg'])){
    $show_gender = array(
        'male'=> 'Nam',
        'female'=> 'Nữ',
    );
    if(empty($_POST['gender'])){
        echo "Bạn chưa chọn giới tính";
    }else{
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn giới tính</title>
</head>
<body>
    <h1>Giới tính</h1>
    <form action="" method="POST">
        <input type="radio" name="gender" value="male" id="male" checked="checked">
        <label for="male">Nam</label><br>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">Nữ</label><br><br>
        <input type="submit" name="btn_reg" value="register">
    </form>
</body>
</html>