<?php
$array_first = [
    1 => 1,
    2 => 3,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9,
    10 => 10
];
$array_second = [
    1 => 1,
    2 => 5,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9,
    10 => 10
];
for ($i = 1; $i <= count($array_first); $i++) {
    print_r($array_first[$i] * $array_second[$i] . "\n");
};
