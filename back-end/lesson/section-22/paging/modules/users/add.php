<?php
if (isset($_POST['btn_login'])) {
    $error = array();

    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Tên không được trống";
    } else {
        $fullname = $_POST['fullname'];
    }
    //
    if (empty($_POST['username'])) {
        $error['username'] = "Tài khoản không được trống";
    } else {
        $username = $_POST['username'];
    }
    //
    if (empty($_POST['password'])) {
        $error['password'] = "Mật khẩu không được trống";
    } else {
        $password = $_POST['password'];
    }
    //

    if (empty($_POST['email'])) {
        $error['email'] = "email không được trống";
    } else {
        $email = $_POST['email'];
    }
    //
    if (empty($error)) {
        // $sql = "INSERT INTO tbl_users (fullname,username,password,email)"
        //     . "VALUES('{$fullname}','{$username}','{$password}','{$email}')";
        // if (mysqli_query($conn, $sql)) {
        //     echo "Thêm dữ liệu thành công";
        // } else {
        //     echo "Lỗi:" . $sql . mysqli_error($conn);
        // }
        $data=array(
            'fullname'=>$fullname,
            'username'=>$username,
            'password'=>$password,
            'email'=>$email
        );
        db_insert('tbl_users',$data);
    }
}
?>

<div id="content">

    <form id="wp_add" action="" method="POST">
        <h1>
            thêm mới sinh Viên
        </h1>
        Fullname:<br><input id="fullname" type="text" name="fullname"><br><br>
        <P class="error"><?php if (!empty($error['Fullname'])) {
                                echo $error['Fullname'];
                            } ?></P>
        Username:<br><input id="username" type="text" name="username"><br><br>
        <P class="error"><?php if (!empty($error['username'])) {
                                echo $error['username'];
                            } ?></P>
        password:<br><input id="password" type="password" name="password"><br><br>
        <P class="error"><?php if (!empty($error['password'])) {
                                echo $error['password'];
                            } ?></P>

        Email:<br><input id="email" type="text" name="email"><br><br>
        <P class="error"><?php if (!empty($error['email'])) {
                                echo $error['email'];
                            } ?></P>
        <input type="submit" name="btn_login" value="Thêm Thành viên">
    </form>
</div>