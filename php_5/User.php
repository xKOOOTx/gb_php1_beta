<?php

class User {
    private string $username;
    private string $email;
    public ?string $sex;
    public ?int $age;
    public bool $isActive;

    function __construct(string $username = "alex", string $email = "alex@alex.com", bool $isActive = false, int $age = 21) {
        $this->username = $username;
        $this->email = $email;
        $this->sex = "male";
        $this->age = $age;
        $this->isActive = $isActive;
    }

}
