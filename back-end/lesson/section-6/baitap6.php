<?php
# tinh tong cac so chan tu 1 den n
// $sum = 0;
// $n = 10;
// for ($i = 1; $i<=$n; $i++){
//     if($i%2==0){
//         $sum += $i;
//     }
// }
// echo "Ket qua bang: {$sum}";
# tinh tong nghich dao cac so chia het cho 3
// $sum = 0;
// $n = 10;
// for ($i = 1; $i<=$n; $i++){
//     if($i%3==0){
//         $sum += (1/$i);
//     }
// }
// echo "Ket qua bang: {$sum}";
#tinh tong chuoi
$sum = 0;
$n = 3;
for ($i = 1; $i<=$n; $i++){ 
        $sum += ($i/($i+1));
}
echo "Ket qua bang: {$sum}";
