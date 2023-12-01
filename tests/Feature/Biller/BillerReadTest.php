<?php

namespace Tests\Feature\Biller;

use Tests\Feature\Biller\BillerBaseTest;
use App\Models\Biller;

class BillerReadTest extends BillerBaseTest
{
    /**
     * A basic feature test example.
     */
    public function test_read_biller(): void
    {
        $biller = Biller::factory()->create();

        $response = $this->actingAs(BillerBaseTest::mockAsUser())->get(BillerBaseTest::HTTP_API_BILLER);

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     */
    public function test_read_biller_by_id(): void
    {
        $biller = Biller::factory()->create();

        $response = $this->actingAs(BillerBaseTest::mockAsUser())->get(BillerBaseTest::HTTP_API_BILLER . '/' .$biller->id);

        $response->assertStatus(200);
    }
}
