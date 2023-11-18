<?php
if(isset($_POST['btn_post'])){
    if(empty($_POST['post_detail'])){
        echo "Hãy nhập mô tả";
    }else{
        $post_detail = $_POST['post_detail'];
        echo $post_detail;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viết mô tả</title>
</head>
<body>
    <h1>Viết mô tả</h1>
    <form action="" method="POST">
        <textarea name="post_detail" cols="30" rows="15"></textarea><br>
        <input type="submit" name="btn_post" value="Thêm mô tả">
    </form>
</body>
</html>