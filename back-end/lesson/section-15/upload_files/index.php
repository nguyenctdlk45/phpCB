<?php
require 'lib/data.php';
if (isset($_FILES['file'])) {
    show_array($_FILES);
    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . $_FILES['file']['name'];
    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo "upload file thanh cong";
        echo"<a href ='$upload_file'>download_here</a>";
    } else {
        echo "upload file khong thanh cong";
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
    <form enctype="multipart/form-data" action="" method="POST">
        Chon file:<input type="file" name="file"><br><br>
        <input type="submit" name="btn_upload" value="upload">
    </form>
</body>

</html>