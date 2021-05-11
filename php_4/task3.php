<?php

/* Дан многомерный массив, представляющий собой коробку, в которую сложены предметы.
* Помимо обычных предметов, каждая коробка может содержать другие коробки.
* Необходимо написать функцию, проверяющую, есть ли предмет в цепочке коробок или нет.
* Функция должна принимать два аргумента: стоковое название предмета для поиска (например: «Ключ») и изначальный массив.
* Возвращаемое значение — bool, где true означает наличие предмета, а false его отсутствие.
* Механизм поиска должен быть реализован с применением рекурсии.
* Пример массива:
*/
/*$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [ 'Настольная игра', 'Настольная игра', ],
        4 => [
            [ 'Ноутбук', 'Зарядное устройство' ],
            [ 'Компьютерная мышь', 'Набор проводов', [ 'Фотография', 'Картина' ] ],
            [ 'Инструкция', [ 'Ключ' ]]
        ]
    ],
    [   0 => 'Пакет кошачьего корма',
        1 => [ 'Музыкальный плеер', 'Книга' ]
    ]
];*/

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [ 'Настольная игра', 'Настольная игра', ],
        4 => [
            [ 'Ноутбук', 'Зарядное устройство' ],
            [ 'Компьютерная мышь', 'Набор проводов', [ 'Фотография', 'Картина' ] ],
            [ 'Инструкция', [ 'Ключ' ]]
        ]
    ],
    [   0 => 'Пакет кошачьего корма',
        1 => [ 'Музыкальный плеер', 'Книга' ]
    ]
];

$needle = "Музыкальный плеер";
function array_find($needle, $box) {
    foreach ($box as $value) {
        if (is_array($value)) {
            if (in_array($needle, $box)) {
                echo "true";
            } else {
                if (array_find($needle, $value)) {
                    echo "true";
                }
            }
        } else {
            if ($value == $needle) {
                echo "true";
            }
        }
    }
    return false;
};

array_find($needle, $box);
