<?php
require 'lib/data.php';
if (isset($_FILES['file'])) {
    show_array($_FILES);
    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . $_FILES['file']['name'];
    $error = array();
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    #Nếu đuôi file nằm trong những đuôi file cho phép
    if (!in_array(strtolower($type), $type_allow)) {
        $error['type'] = "chỉ được upload file có đuôi 'png','jpg','gif','jpeg'";
    } else {
        #Kiểm tra kích thước file
        if ($_FILES['file']['size'] > 3000000) {
            $error['type'] = "chỉ được upload file có kích thước 20 MB";
        }
        #Kiểm tra trùng file
        if (file_exists($upload_file)) {
            $error['type'] = "file đã tồn tại";
        }
    }
    # nếu không có lỗi
    if (empty($error)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "upload file thanh cong <br>";
            echo "<a href ='$upload_file'>download_here</a><br>";
            echo "<img src='{$upload_file}'/>";
        } else {
            echo "upload file khong thanh cong";
        }
    } else show_array($error);
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