<?php

namespace Tests\Feature\Biller;

use Tests\Feature\Biller\BillerBaseTest;
use App\Models\Biller;

class BillerUpdateTest extends BillerBaseTest
{
    /**
     * POST endpoint with 201 status
     */
    public function test_update_biller(): void
    {

        $biller = Biller::factory()->create();
        $model = Biller::factory()->make();

        $response = $this->actingAs(BillerBaseTest::mockAsUser())->put(BillerBaseTest::HTTP_API_BILLER . '/' . $biller->id, [
            'billerName' => $model->billerName,
            'billerCode' => $model->billerCode,
            'billerDescription' => $model->billerDescription,
        ]);

        $content = json_decode($response->content());

        $response->assertStatus(200);
        
        $this->assertEquals($model->billerName, $content->billerName);
        $this->assertEquals($model->billerCode, $content->billerCode);
        $this->assertEquals($model->billerDescription, $content->billerDescription);
    }
}
