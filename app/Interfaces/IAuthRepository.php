<?php

namespace App\Interfaces;

use App\DTO\LoginDTO;

interface IAuthRepository {

    public function login(LoginDTO $loginDTO);

}