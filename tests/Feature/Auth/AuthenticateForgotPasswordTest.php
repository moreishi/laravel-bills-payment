<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;

class AuthenticateForgotPasswordTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
