<?php

/**Создайте N-ый массив, с N-ми числами,
 * а после сложите все эти числа.
 */

$array = array();
$z = rand(1, 100);

while ( $z > 0 ) {
    $y = rand(1, 1000);
    array_push($array, $y);
    $z--;
}

echo '<pre>';
print_r($array);
echo '</pre>';

echo "Сумма чисел массива равна = " . array_sum($array);

?>