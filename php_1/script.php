<?php
$name = readline("Привет, как тебя зовут?");
(string)$task1 = readline("Какая задача предстоит сегодня?");
$timeForTask1 = (int)readline("Сколько примерно времени она займет?");
(string)$task2 = readline("Какая еще задача предстоит сегодня?");
$timeForTask2 = (int)readline("Сколько примерно времени она займет?");
(string)$task3 = readline("Какая еще задача предстоит сегодня?");
$timeForTask3 = (int)readline("Сколько примерно времени она займет?");
$summary = $timeForTask1 + $timeForTask2 + $timeForTask3;

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n
- $task1 ($timeForTask1 ч.)\n
- $task2 ($timeForTask2 ч.)\n
- $task3 ($timeForTask3 ч.)\n
Примерное время выполнения плана = $summary ч.";

