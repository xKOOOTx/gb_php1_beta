<?php

/* Разработайте функцию с объявленными типами аргументов и возвращаемого значения,
 * принимающую в качестве аргумента массив целых чисел. Результатом работы функции должен быть массив,
 * содержащий три элемента: max — наибольшее число, min — наименьшее число, avg — среднее арифметическое всех чисел массива;
 */

$integers = [123, 222, 135245, 122, -1938, 9854, 231, -87984, 2132, 65421, -5, 4, 3, 0, 651, 651651, 88484, 162, -345877];

$func = function($integers) {
    $max = max($integers);
    $min = min($integers);
    $avg = round(array_sum($integers) / count($integers));
  echo "max = $max\nmin = $min\navg = $avg";
};

$func($integers);
