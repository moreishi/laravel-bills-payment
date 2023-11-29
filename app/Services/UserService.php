<?php

namespace App\Services;

use App\Interfaces\IUserService;
use App\Models\User;
use App\DTO\UserDTO;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService implements IUserService {

    public function create(UserDTO $userDTO) : User {
        
        $password = Str::random(8);

        $user = User::create([
            'firstName' => $userDTO->firstName,
            'lastName' => $userDTO->lastName,
            'email' => $userDTO->email,
            'password' => Hash::make($password)
        ]);

        return $user;
    }

    public function update(UserDTO $userDTO) : User {

        $user = User::find($userDTO->id);
        $user->firstName = $userDTO->firstName;
        $user->lastName = $userDTO->lastName;
        $user->save();

        return $user;
    }

    public function delete($userId) {}

}