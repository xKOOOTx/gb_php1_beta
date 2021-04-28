<?php
$name = readline("Привет, как тебя зовут?");
$task1 = readline("Какая задача предстоит сегодня?");
$timeForTask1 = readline("Сколько примерно времени она займет?");
$task2 = readline("Какая еще задача предстоит сегодня?");
$timeForTask2 = readline("Сколько примерно времени она займет?");
$task3 = readline("Какая еще задача предстоит сегодня?");
$timeForTask3 = readline("Сколько примерно времени она займет?");
$summary = $timeForTask1 + $timeForTask2 + $timeForTask3;

$hourSymbol = 'ч.';

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n
- $task1 ($timeForTask1$hourSymbol)\n
- $task2 ($timeForTask2$hourSymbol)\n
- $task3 ($timeForTask3$hourSymbol)\n
Примерное время выполнения плана = $summary$hourSymbol";

