<?php

namespace App\DTO;

class RegisterDTO {

    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $confirmPassword;

    public function __construct(
        $firstName, 
        $lastName, 
        $email, 
        $password, 
        $confirmPassword)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }

}