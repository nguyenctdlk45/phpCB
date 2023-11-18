<?php
$list_prime = array(2, 3, 5, 6, 7);
//danh sach thanh vien
$list_info = array(
    1 => array(
        'id' => '1',
        'email' => 'nguyenb1906725@student.ctu.edu.vn',
        'fullname' => 'Nguyen Chi Nguyen'
    ),
    2 => array(
        'id' => '2',
        'email' => 'thanhb1906725@student.ctu.edu.vn',
        'fullname' => 'Nguyen Chi thanh'
    ),
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhung du lieu mang len html</title>
</head>

<body>

    <h1>Danh so nguyen to</h1>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="50">Stt</td>
                <td align="center" width="120">So nguyen to</td>
            </tr>
        </thead>
        <tbody align="center">
            <?php
            $temp = 0;
            foreach ($list_prime as $item) {
                $temp++;
            ?>
                <tr>
                    <td><?php echo $temp; ?></td>
                    <td><?php echo $item; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <h1>Danh sach thanh vien</h1>
    <table border="1">
        <thead>
            <tr align="center">
                <td width="50">Stt</td>
                <td width="50">Id</td>
                <td width="200">Ho va ten</td>
                <td width="200">Email</td>
            </tr>
        </thead>
        <tbody align="center">
            <?php
            $temp = 0;
            foreach ($list_info as $user) {
                $temp++;
            ?>
                <tr>
                    <td><?php echo $temp; ?></td>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['fullname']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>