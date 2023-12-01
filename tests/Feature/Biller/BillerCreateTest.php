<?php

namespace Tests\Feature\Biller;

use Tests\Feature\Biller\BillerBaseTest;
use App\Models\Biller;

class BillerCreateTest extends BillerBaseTest
{
    /**
     * POST endpoint with 201 status
     */
    public function test_create_biller(): void
    {

        $model = Biller::factory()->make();

        $response = $this->actingAs(BillerBaseTest::mockAsUser())->post(BillerBaseTest::HTTP_API_BILLER, [
            'billerName' => $model->billerName,
            'billerCode' => $model->billerCode,
            'billerDescription' => $model->billerDescription,
        ]);

        $content = json_decode($response->content());
        
        $response->assertStatus(201);

        $this->assertEquals($model->billerName, $content->billerName);
        $this->assertEquals($model->billerCode, $content->billerCode);
        $this->assertEquals($model->billerDescription, $content->billerDescription);
    }
}
