<?php
    $wish = ["счастья", "здоровья", "богатства", "изобилия", "процветания", "добра", "воображения", "терпения"];
    $epithet = [
        "бесконечного", "крепкого", "безудержного",
    ];

    $name = readline('Введите имя именинника');
    $surname = readline('Введите фамилию именинника');

    $wishing = array_rand($wish, 1);
    $epithet_wishing = array_rand($wish, 1);

    echo "Дорогой $name $surname, от всего сердца поздравляю тебя с днем рождения, желаю $wishing $epithet_wishing, $wishing $epithet_wishing и $wishing $epithet_wishing!";
