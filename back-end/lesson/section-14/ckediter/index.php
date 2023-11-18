<?php
if(isset($_POST['btn_add'])){
    echo $_POST['post_content'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
    <title>Document</title>
</head>

<body>
    <style>
        #content {
            width: 960px;
            margin: 0px auto;

        }
    </style>
    <div id="content">
        <form method="POST">
            <textarea class="ckeditor" name="post_content"></textarea>
            <br><br>
            <input type="submit" name="btn_add" value="Thêm bài">
    </div>
    </form>
</body>

</html>