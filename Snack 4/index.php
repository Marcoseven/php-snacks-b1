<?php
/* 
Traccia Snack 4: 
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.

Strumenti: 
- ciclo while;
- condizionale if;
- in_array().
*/

$numbers_random = [];
while (count($numbers_random) <= 15) {
    $number_random = rand(1, 100);
     if(!in_array($number_random, $numbers_random)){
            $numbers_random[] = $number_random;
            echo $number_random;
        }
}
var_dump($numbers_random);
?>