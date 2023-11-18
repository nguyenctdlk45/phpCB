<?php
if(isset($_POST['btn_reg'])){
    if(isset($_POST['rules'])){
        $rules = $_POST['rules'];
        echo $rules;
    }else{
        echo"Hãy đọc và đồng ý điều khoản";
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
    <h1>ĐIỀU KHOẢN</h1>
    <P style="width: 400px; height: 100px; overflow-y:scroll;">
        “Mọi tranh chấp phát sinh từ hoặc liên quan đến hợp đồng này sẽ được giải quyết bằng trọng tài tại Trung tâm Trọng tài Quốc tế Việt Nam (VIAC) theo Quy tắc tố tụng trọng tài của Trung tâm này. Các bên thỏa thuận rằng tố tụng trọng tài sẽ được tiến hành theo Thủ tục rút gọn quy định tại Điều 37 của Quy tắc tố tụng trọng tài của VIAC.”
    </P>
    <form action="" method="POST">
        <input type="checkbox" name="rules" value="yes" id="rules">
        <label for="rules">Đồng ý</label><br><br>
        <input type="submit" name="btn_reg" value="register">
    </form>
</body>

</html>