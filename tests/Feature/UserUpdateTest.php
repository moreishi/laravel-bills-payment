<?php

namespace Tests\Feature;

use Tests\Feature\UserBaseTest;

use App\Models\User;

class UserUpdateTest extends UserBaseTest
{
    /**
     * POST endpoint with 201 status
     */
    public function test_update_user(): void
    {

        $user = User::factory()->create();
        $model = User::factory()->make();

        $response = $this->actingAs(UserBaseTest::mockAsUser())->put(UserBaseTest::HTTP_API_USER . '/' . $user->id, [
            'firstName' => $model->firstName,
            'lastName' => $model->lastName,
            'email' => $model->email,
        ]);

        $content = json_decode($response->content());

        $response->assertStatus(200);
        
        $this->assertEquals($model->firstName, $content->firstName);
        $this->assertEquals($model->lastName, $content->lastName);
    }

}
