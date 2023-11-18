<?php
// $sql = "SELECT * FROM `tbl_users`";
// $result = mysqli_query($conn, $sql);
// $list_users = array();
// $num_user= mysqli_num_rows($result);
// if ($num_user > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $list_users[] = $row;
//     }
// }
$list_users= db_fetch_array("SELECT * FROM `tbl_users`");
$num_user= db_num_rows("SELECT * FROM `tbl_users`");
foreach($list_users as & $iuser){
        $iuser['url_update']="?mod=users&act=update&id={$iuser['id_user']}";
        $iuser['url_delete']="?mod=users&act=delete&id={$iuser['id_user']}";
    }
if(isset($_POST['btn_search'])){
$list_users= db_fetch_array("SELECT * FROM `tbl_users` WHERE `fullname` LIKE '%{$_POST['search_text']}%'");
$num_user= db_num_rows("SELECT * FROM `tbl_users` WHERE `fullname` LIKE '%{$_POST['search_text']}%'");
// $sql = "SELECT COUNT (id_user) FROM `tbl_users`";
// $result = mysqli_query($conn, $sql);
// $num_user = $result;
foreach($list_users as & $iuser){
        $iuser['url_update']="?mod=users&act=update&id={$iuser['id_user']}";
        $iuser['url_delete']="?mod=users&act=delete&id={$iuser['id_user']}";
    }
}
// show_array($list_users);
?>
<div id="content">
    <a href="?mod=users&act=add"> Thêm mới</a>
    <h1>
        Danh sách sinh Viên <br>
        <?php echo "Số lượng thành viên : {$num_user}"; ?><br><br>
    </h1>
    <form class="search_form" method="POST">
        <input type="text" id="search_text" name="search_text">
        <input type="submit" id="btn_search" name="btn_search" value="Search">
    </form>
    <br>
    <?php
    if (!empty($list_users)) {
    ?>
        <table class="list_users" >
            <thead>
                <tr>
                    <td>STT</td>
                    <td>ID</td>
                    <td>Họ và tên</td>
                    <td>Username</td>
                    <td>email</td>
                    <td>Thao tác</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp=0;
                foreach ($list_users as $user) {
                    $temp ++;
                ?>
                <tr>
                    <td><?php echo "$temp"; ?></td>
                    <td><?php echo "{$user['id_user']}"; ?></td>
                    <td><?php echo "{$user['fullname']}"; ?></td>
                    <td><?php echo "{$user['username']}"; ?></td>
                    <td><?php echo "{$user['email']}"; ?></td>
                    <td><a href="<?php echo "{$user['url_update']}"; ?>">sửa </a>|<a href="<?php echo "{$user['url_delete']}"; ?>"> xóa</a></td>
                </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
    <?php
    }
    else echo " Danh sách trống"
    ?>


</div>