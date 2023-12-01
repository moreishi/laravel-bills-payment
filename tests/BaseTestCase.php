<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

use Spatie\Permission\Models\Role;


class BaseTestCase extends TestCase 
{
    use CreatesApplication;
    
    use RefreshDatabase;

    protected function setUp(): void
    {

        parent::setUp();

        $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->mockAuthUserToken(),
            'Accept' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ]);

        Role::create(['name' => 'member']);
        
    }

    public static function mockUser()
    {
        return User::factory()->create();
    }

    public static function mockAuthUserToken()
    {
        return BaseTestCase::mockUser()->createToken('unit-test-token')->plainTextToken;
    }

    public static function mockAsUser()
    {
        return User::first();
    }
}
