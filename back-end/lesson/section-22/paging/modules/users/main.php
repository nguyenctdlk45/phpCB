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
// $list_users = db_fetch_array("SELECT * FROM `tbl_users`");
$num_users = db_num_rows("SELECT * FROM `tbl_users`");
// foreach ($list_users as &$iuser) {
//     $iuser['url_update'] = "?mod=users&act=update&id={$iuser['id_user']}";
//     $iuser['url_delete'] = "?mod=users&act=delete&id={$iuser['id_user']}";
//}
// show_array($list_users);
?>
<?php
#Tính số trang
//số lượng sp/trang
$num_per_page = 5;
//tổng số sp
$total_row = $num_users;
//=> số trang
$num_page = ceil($total_row / $num_per_page);
//echo " số trang: {$num_page}";

// nếu tồn tại số trang thì lấy nó ngược lại số trang bằng 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
//điểm xuất phát của số bảng ghi theo trang
$start = ($page - 1) * $num_per_page;
//Lấy số lượng bản ghi theo số sản phẩm cho trước
$list_users = db_fetch_array("SELECT * FROM `tbl_users` LIMIT {$start},{$num_per_page}");

foreach ($list_users as &$iuser) {
    $iuser['url_update'] = "?mod=users&act=update&id={$iuser['id_user']}";
    $iuser['url_delete'] = "?mod=users&act=delete&id={$iuser['id_user']}";
}
?>
<div id="content">
    <a href="?mod=users&act=add"> Thêm mới</a>
    <h1>
        Danh sách sinh Viên <br>
        <?php echo "Số lượng thành viên : {$num_users}"; ?><br><br>
    </h1>
    <?php
    if (!empty($list_users)) {
    ?>
        <table class="list_users">
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
                $temp = $start;
                foreach ($list_users as $user) {
                    $temp++;
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
    } else echo " Danh sách trống"
    ?>
    <?php
    get_paging($num_page, $page, "?mod=users&act=main");
    ?>
    <p class="clearfix"></p>

</div>