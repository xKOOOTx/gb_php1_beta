<?php

require_once "Task.php";
require_once "TaskService.php";
require_once "Comment.php";
$task = new Task("true", "22",);
$taskService = new TaskService();
$task->setDescription();
$task->markAsDone();
$taskService->addComment();
var_dump($task);
