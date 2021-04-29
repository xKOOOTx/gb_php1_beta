<?php
    $i = (int)readline("Сколько дел запланировано на сегодня?\n");
    $tasks = [];
    $task_time_array = [];

    if ($i === 0) {
        echo "Ну, нет - так нет\n";
    } elseif ($i === "q" || $i === "quit" || $i === "й" || $i === "Й" || $i === "выход" || $i === "Выход") {
        echo "Выход есть! тьфу Есть выход! В общем вышли мы все из себя.\n";
    } else {
        for ($task = 0; $task < $i; $task++) {
            $task_name = readline("Какая задача предстоит сегодня?\n");
            $task_time = readline("Сколько времени она займет?\n");
            $tasks [] = $task_name;
            $task_time_array [] = $task_time;
        }
        echo "Записал:\n";
        for ($task = 0; $task < $i; $task++) {
            echo $tasks[$task] . " " . $task_time_array[$task] . "ч.\n";
        }
        $tasks_sum = array_sum($task_time_array);
        echo "А всего дела займут $tasks_sum" . "ч.";
    }

