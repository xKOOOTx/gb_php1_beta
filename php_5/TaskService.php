<?php
require_once "User.php";
require_once "Task.php";
require_once "Comment.php";

class TaskService
{
    public object $user;
    public object $text;

    function addComment() {
        $this->user = new User("Kloth");
        $comment = new Comment();
        $comment->setComment("some comment");
    }
}
