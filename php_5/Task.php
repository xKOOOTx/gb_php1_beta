<?php

require_once "User.php";
require_once "TaskService.php";

class Task
{
    public string $description;
    private string $dateCreated;
    private string $dateUpdated;
    private string $dateDone;
    private int $priority;
    private bool $isDone;
    private object $user;
    public object $taskService;

    /**
     * Task constructor.
     * @param string $dateCreated
     * @param string $dateUpdated
     * @param string $dateDone
     * @param int $priority
     * @param bool $isDone
     * @param object user
     * @param object taskService
     */
    public function __construct(bool $isDone = true, int $priority = 1)
    {
        $date = new DateTime();
        $formatDate = $date->format('d.m.Y H:i:s');

        $this->dateCreated = $formatDate;
        $this->dateUpdated = $formatDate;
        $this->dateDone = $formatDate;
        $this->priority = $priority;
        $this->isDone = $isDone;
        $this->user = new User();
        $this->taskService = new taskService();
    }

    function setDescription(): string {
        $date = new DateTime();
        $formatDate = $date->format('Y.m.d H:i:s');
        return $this->dateUpdated = $formatDate and $this->description = "какое-то описание";
    }

    function markAsDone(): string {
        $date = new DateTime();
        $formatDate = $date->format("Y.m.d H:i");
        $doneFormatDate = $date->format("d.m.Y H:i");
        $this->dateUpdated = $formatDate;
        $this->dateDone = $doneFormatDate;
        return $this->isDone = true;
    }
}
