<?php
# Bai tap 1
// $list_odd = array();
// for ($i = 3; $i <= 150; $i++){
//     if($i%2!=0){
//         $list_odd[] = $i;
//     }
// }
// foreach($list_odd as $item){
//     echo"<pre>";
//     echo $item;
//     echo"</pre>";
//}
#Bai tap 2 
$list_post = array(
    1 => array(
        'id' => 1,
        'cat_title' => 'The thao',
        'picture' => 'Hinh anh the thao',
        'content' => 'Noi dung the thao'
    ),
    2 => array(
        'id' => 2,
        'cat_title' => 'xa hoi',
        'picture' => 'Hinh anh xa hoi',
        'content' => 'Noi dung xa hoi'
    )
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noi dung bai viet</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr style="font-weight: bold; color:brown;" align="center">
                <td width="50">id</td>
                <td width="200">cat_title</td>
                <td width="200">picture</td>
                <td width="200">content</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_post as $item) {
            ?>
                <tr align="center">
                    <td width="50"><?php echo $item['id']; ?></td>
                    <td width="200"><?php echo $item['cat_title']; ?></td>
                    <td width="200"><?php echo $item['picture']; ?></td>
                    <td width="200"><?php echo $item['content']; ?></td>
                </tr>
         <?php
            }
    ?>       
        </tbody>
    
    </table>
</body>

</html>