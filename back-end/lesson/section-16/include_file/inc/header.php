<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet"  href="css/reset.css">
    <title>Document</title>
</head>

<body>
    
    <div id="wrapper">
        <div id="header">
        <?php if(isset($_SESSION['is_login'])){ ?>
        <div id="user_login">
            <a>Xin chào: </a><strong><?php if(is_login()) echo infor_user('fullname');  ?></strong><a href="?page=logout"> Đăng xuất</a>
        </div>
        <?php } ?>
            <ul id="main_menu">
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=product">Sản phẩm</a></li>
                <li><a href="?page=news">Tin tức</a></li>
                <li><a href="?page=about">Giới thiệu</a></li>
                <li><a href="?page=login">Đăng nhập</a></li>
            </ul>
        </div>