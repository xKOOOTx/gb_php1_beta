<?php
    $wish = ["счастья", "здоровья", "богатства", "изобилия", "процветания", "добра", "воображения", "терпения"];
    $epithet = [
        "бесконечного", "крепкого", "безудержного", "лучшего", "веселого", "наилучшего", "праздничного", "безоблачного"
    ];

    $name = readline("Введите имя именинника\n");
    $surname = readline("Введите фамилию именинника\n");

    $rand_wish_key = array_rand($wish, 3);
    $rand_epithet_keys = array_rand($wish, 3);


echo "Дорогой $name $surname, от всего сердца поздравляю тебя с днем рождения, желаю " .
        $epithet[$rand_epithet_keys[0]] . " " .  $wish[$rand_wish_key[0]]. ", " . $epithet[$rand_epithet_keys[1]] . " " .
        $wish[$rand_wish_key[1]] . " и " . $epithet[$rand_epithet_keys[2]] . " " . $wish[$rand_wish_key[2]] . " !";

