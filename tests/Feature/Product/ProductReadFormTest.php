<?php

namespace Tests\Feature\Product;

use Tests\Feature\Product\ProductBaseTest;
use App\Models\Product;

class ProductReadFormTest extends ProductBaseTest
{
    /**
     * A basic feature test example.
     */
    public function test_read_biller(): void
    {
        Product::factory(5)->create();

        $response = $this->actingAs(ProductBaseTest::mockAsUser())
            ->get(ProductBaseTest::HTTP_API_PRODUCT);

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     */
    public function test_read_biller_by_id(): void
    {
        $biller = Product::factory()->create();

        $response = $this->actingAs(ProductBaseTest::mockAsUser())
            ->get(ProductBaseTest::HTTP_API_PRODUCT . '/' .$biller->id);

        $response->assertStatus(200);
    }
}
