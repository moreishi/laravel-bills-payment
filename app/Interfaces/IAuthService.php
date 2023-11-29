<?php

namespace App\Interfaces;

use App\DTO\RegisterDTO;

interface IAuthService {

    public function register(RegisterDTO $registerDTO);

}