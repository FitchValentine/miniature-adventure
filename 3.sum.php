<?php

$sum = 0;

for ($i = 1; $i < 1000; $i++) {
    if ($i % 3 === 0 || $i % 5 === 0) {
        $sum += $i;
    }
}

echo "Сумма всех чисел меньше 1000, кратных 3 или 5, равна: " . $sum;

?>