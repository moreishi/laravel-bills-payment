<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreateFormRequest;
use App\Http\Requests\UserUpdateFormRequest;

use App\Repositories\UserRepository;
use App\Services\UserService;

use App\DTO\UserDTO;

class UserController extends Controller
{

    public $userRepository;
    public $userService;

    public function __construct(
        UserRepository $userRepository, 
        UserService $userService)
    {
        $this->userRepository = $userRepository;
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->userRepository->findAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserCreateFormRequest $request)
    {
        $userDTO = new UserDTO(
            $request->firstName,
            $request->lastName,
            $request->email);

        return $this->userService->create($userDTO);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->userRepository->findById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateFormRequest $request, string $id)
    {
        $userDTO = new UserDTO(
            $request->firstName,
            $request->lastName,
            $request->email);
        $userDTO->id = $id;

        return $this->userService->update($userDTO);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
