<?php

namespace Tests\Feature\Biller;

use Tests\Feature\Biller\BillerBaseTest;
use App\Models\Biller;

class BillerDeleteTest extends BillerBaseTest
{
    /**
     * A basic feature test example.
     */
    public function test_delete_biller(): void
    {
        $biller = Biller::factory()->create();

        $response = $this->actingAs(BillerBaseTest::mockAsUser())->delete(BillerBaseTest::HTTP_API_BILLER . '/' . $biller->id);

        $response->assertStatus(200);
    }
}
