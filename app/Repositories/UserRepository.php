<?php

namespace App\Repositories;

use App\Interfaces\IUserRepository;
use App\Models\User;

class UserRepository implements IUserRepository {

    public function findAll() : User {
        return User::paginate();
    }
    
    public function findById(int $userId) : User {
        return User::find($userId);
    }

}