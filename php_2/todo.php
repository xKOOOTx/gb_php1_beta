<?php
    $i = (int)readline("Сколько дел запланировано на сегодня?\n");
    $task = 0;
    $tasks = [];
    $task_time_array = [];

    if ($i === 0) {
        echo "Ну, нет - так нет\n";
    } elseif ($i === "q" || $i === "quit" || $i === "й" || $i === "Й" || $i === "выход" || $i === "Выход") {
        echo "Выход есть! тьфу Есть выход! В общем вышли мы все из себя.\n";
    } else {
        while ($task < $i) {
            $task_name = readline("Какая задача предстоит сегодня?\n");
            $task_time = readline("Сколько времени она займет?\n");
            $tasks = $task_name;
            $task_time_array = $task_time;
            $task++;
        }
        for ($a = 0; $a < $i; $a++) {
            print_r($tasks[$a]);
//            print_r($task_time_array[$a]); //Uninitialized string offset: 1
        }
    }
//    $tasks_sum = array_sum($time_time_arr);
//    print_r($tasks);
//    print_r($time_time_arr);

