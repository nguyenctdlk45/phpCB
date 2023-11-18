<?php
if(isset($_POST['btn_reg'])){
    if(!empty($_POST['cat'])){
        foreach($_POST['cat'] as $item){
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
    <title>List checkbok</title>
</head>

<body>
    <h1>LIST CHECKBOX</h1>

    <form action="" method="POST">
        <input type="checkbox" name="cat[1]" value="1" id="cat_1">
        <label for="cat_1">Thể thao</label><br><br>
        <input type="checkbox" name="cat[2]" value="2" id="cat_2">
        <label for="cat_2">Xã hội</label><br><br>
        <input type="submit" name="btn_reg" value="Thêm bài viết">
    </form>
</body>

</html>