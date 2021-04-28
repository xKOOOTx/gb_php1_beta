<?php
    quiz_1:
    echo "q или quit для выхода\n";
    $quiz_1 = readline("В каком году произошло крещение Руси? A) 898 году B) 988 году С) 1001 году D) 998 году\n");
    if ($quiz_1 === "988" || $quiz_1 === "D" || $quiz_1 === "d") {
        echo "Все верно! D) 998 году";
    } elseif ($quiz_1 === "quit" || $quiz_1 === "q" || $quiz_1 === "й" || $quiz_1 === "Й") {
        echo "Ты успешно вышел из тест\n";
    } else {
        echo "Ответ не верный, попробуй снов\n";
        goto quiz_1;
    }

    quiz_2:
    echo "q или quit для выхода\n";
    $quiz_2 = readline("What does the fox say? A) Ring-ding B)Wa-pa-pa C) Gering-ding D) Hatee-hatee \n");
    if ($quiz_2 == null) {
        echo "Похоже ты ничего не ответил, либо ответ не верный. Попробуй снова\n";
        goto quiz_2;
    } elseif ($quiz_2 === "quit" || $quiz_2 === "q" || $quiz_2 === "й" || $quiz_2 === "Й") {
        echo "Ты успешно вышел из тест\n";
    } else {
        echo "Все верно\n";
    }
