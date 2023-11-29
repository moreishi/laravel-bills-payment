<?php

namespace Tests\Feature;

use Tests\BaseTestCase;

use App\Models\User;

class UserBaseTest extends BaseTestCase
{
    const HTTP_API_USER = '/api/users';

    protected function setUp(): void
    {

        parent::setUp();

        $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->mockAuthUserToken(),
            'Accept' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ]);
    }

    public static function mockUser()
    {
        return User::factory()->create();
    }

    public static function mockAuthUserToken()
    {
        return AuthBaseTest::mockUser()->createToken('unit-test-token')->plainTextToken;
    }

    public static function mockAsUser()
    {
        return User::first();
    }
}
