<?php

namespace App\DTO;

class UserDTO {

    public $id;
    public $firstName;
    public $lastName;
    public $email;

    public function  __construct(
        $firstName, 
        $lastName, 
        $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

}