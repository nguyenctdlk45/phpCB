<?php
$id= (int)$_GET['id'];
if (isset($_POST['btn_update'])) {
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
    
    if (empty($_POST['email'])) {
        $error['email'] = "email không được trống";
    } else {
        $email = $_POST['email'];
    }
    
    if (empty($error)) {
        // $sql = "UPDATE `tbl_users` SET  `username` = '{$username}', `fullname` = '{$fullname}', `email` = '{$email}' WHERE `id_user`= {$id}";
        // if (mysqli_query($conn, $sql)) {
        //     echo "Thêm dữ liệu thành công";
        //     redirect("?mod=users&act=main");
        // } else {
        //     echo "Lỗi:" . $sql . mysqli_error($conn);
        // }
        $data=array(
            'fullname'=>$fullname,
            'username'=>$username,
            'email'=>$email
        );
        db_fetch_row('tbl_users',$data,"`id_user`= {$id}");
    }
}
// $sql="SELECT * FROM `tbl_users` WHERE `id_user` = {$id}";
// $result = mysqli_query($conn,$sql);
// $item = mysqli_fetch_assoc($result);
$item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `id_user` = {$id}");
show_array($item);
?>

<div id="content">

    <form id="wp_add" action="" method="POST">
        <h1>
            Sửa thông tin sinh Viên
        </h1>
        Fullname:<br><input id="fullname" type="text" name="fullname" value="<?php if(!empty($item['fullname'])){ echo "{$item['fullname']}";} ?>"><br><br>
        <P class="error"><?php if (!empty($error['Fullname'])) {
                                echo $error['Fullname'];
                            } ?></P>
        Username:<br><input id="username" type="text" name="username" value="<?php if(!empty($item['username'])){ echo "{$item['username']}";} ?>"><br><br>
        <P class="error"><?php if (!empty($error['username'])) {
                                echo $error['username'];
                            } ?></P>

        Email:<br><input id="email" type="text" name="email" value="<?php if(!empty($item['email'])){ echo "{$item['email']}";} ?>"><br><br>
        <P class="error"><?php if (!empty($error['email'])) {
                                echo $error['email'];
                            } ?></P>
        <input type="submit" name="btn_update" value="sửa thông tin sinh viên">
    </form>
</div>