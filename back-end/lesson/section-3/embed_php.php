<?php
$content_title = "TIÊU ĐỀ";
$content_post = "NỘI DUNG"
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
        h1{
            color: red;
        }
    </style>
    <div id = "content">
        <h1 class=""> <?php echo"$content_title" ;?></h1>
        <div>
            <?php
            echo"$content_post";
            ?>
        </div>

    </div>
</body>
</html>