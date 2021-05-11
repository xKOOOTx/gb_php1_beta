<?php

use JetBrains\PhpStorm\Pure;

require_once "User.php";
require_once "Task.php";

class Comment
{
    public object $author;
    public object $task;
    public string $text;

    function __construct() {
        $this->task = new Task();
        $this->author = new User();
    }

    function setComment(?string $text = "Some comment"):string {
       return $this->text = "Какой-то комментарий";
    }
}
