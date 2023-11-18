<?php
#Bai 1:
// $num_per_page = 25;
// $total_crows = 101;
// $number_page = ceil($total_crows/$num_per_page);
// echo $number_page;
#Bai 2:
// $list_number = array(1,3,4,6,7,9,23,22,49,55,72);
// foreach ($list_number as $number){
//     if($number%2==0){
//         $number_even[] = $number; 
//     }
// }
// print_r($number_even);
#Bai 3:
$list_post_cat = array(
    1 => array(
        'cat_id' => '1',
        'cat_title' => 'Giao duc',
        'level' => '0'
    ),
    2 => array(
        'cat_id' => '2',
        'cat_title' => 'Khuyen hoc',
        'level' => '1'
    ),
    3 => array(
        'cat_id' => '3',
        'cat_title' => 'du lich',
        'level' => '1'
    ),
    4 => array(
        'cat_id' => '4',
        'cat_title' => 'The thao',
        'level' => '0'
    ),
    5 => array(
        'cat_id' => '5',
        'cat_title' => 'Chau Au',
        'level' => '1'
    ),
    6 => array(
        'cat_id' => '6',
        'cat_title' => 'Chau A',
        'level' => '1'
    )
)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 9</title>
</head>
<table>
    <body>
        <?php
        foreach ($list_post_cat as $item) {
        ?>
            <tbody>
                <tr>
                    <td>
                        <?php echo str_repeat('--',$item['level']).$item['cat_title'] ?>
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </body>
</table>

</html>