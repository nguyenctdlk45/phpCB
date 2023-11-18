<?php
$id= (int)$_GET['id'];
// $sql=" DELETE FROM `tbl_users` WHERE `id_user` = {$id}";
// $result = mysqli_query($conn,$sql);
db_delete("tbl_users","`id_user`={$id}");
redirect("?mod=users&act=main");