<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\User\UserBaseTest;

use App\Models\User;
use Carbon\Carbon;

class UserCreateTest extends UserBaseTest
{
    /**
     * POST endpoint with 201 status
     */
    public function test_create_user(): void
    {

        $model = User::factory()->make();

        $response = $this->actingAs(UserBaseTest::mockAsUser())->post(UserBaseTest::HTTP_API_USER, [
            'firstName' => $model->firstName,
            'lastName' => $model->lastName,
            'email' => $model->email,
        ]);

        $content = json_decode($response->content());
        
        $response->assertStatus(201);

        $this->assertEquals($model->firstName, $content->firstName);
        $this->assertEquals($model->lastName, $content->lastName);
        $this->assertEquals($model->email, $content->email);
    }

}
