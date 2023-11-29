<?php

namespace Tests\Feature;

use Tests\Feature\AuthBaseTest;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class AuthenticateRegisterTest extends AuthBaseTest
{
    /**
     * Try valid credentials
     */
    public function test_user_register(): void
    {
        $mockUser = User::factory()->make();

        $response = $this->post(AuthBaseTest::HTTP_API_REGISTER, [
            'firstName' => $mockUser->firstName,
            'lastName' => $mockUser->lastName,
            'email' => $mockUser->email,
            'password' => 'password',
            'confirmPassword' => 'password'
        ]);

        $response->assertStatus(Response::HTTP_OK);
    }

    /**
     * Test invalid email as credential
     */
    public function test_user_register_invalid_email(): void
    {
        $mockUser = User::factory()->make();

        $response = $this->post(AuthBaseTest::HTTP_API_REGISTER, [
            'firstName' => $mockUser->firstName,
            'lastName' => $mockUser->lastName,
            'email' => 'test@domain',
            'password' => 'password',
            'confirmPassword' => 'password'
        ]);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
