<?php
if (isset($_POST['pay'])) {
    if(empty($_POST['pay'])){
        echo "Hãy chọn phương thức thanh toán";
    }else{
        echo $_POST['pay'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>

<body>
    <h1>CHỌN HÌNH THỨC THANH TOÁN</h1>
    <form action="" method="POST">
        <select name="pay">
            <option value="">--chọn--</option>
            <option value="cod"> Thanh toán tại nhà</option>
            <option value="banking"> Thanh toán qua thẻ ngân hàng</option>
        </select>
        <input type="submit" name="btn_oder" value="Đặt hàng">
    </form>
    

</body>

</html>