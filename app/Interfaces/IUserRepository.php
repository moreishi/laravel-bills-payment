<?php

namespace App\Interfaces;

use App\Models\User;

interface IUserRepository {

    public function findAll() : User;
    
    public function findById(int $userId) : User;

}