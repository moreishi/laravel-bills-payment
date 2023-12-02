<?php

namespace Tests\Feature\Product;


use Tests\Feature\Product\ProductBaseTest;
use App\Models\Product;

class ProductDeleteFormTest extends ProductBaseTest
{

   public function test_delete_product(): void
   {
       $biller = Product::factory()->create();

       $response = $this->actingAs(ProductBaseTest::mockAsUser())
            ->delete(ProductBaseTest::HTTP_API_PRODUCT . '/' . $biller->id);

       $response->assertStatus(200);
   }

   public function test_delete_product_failed(): void
   {
       $response = $this->actingAs(ProductBaseTest::mockAsUser())
            ->delete(ProductBaseTest::HTTP_API_PRODUCT . '/' . 2);

       $response->assertStatus(409);
   }
}
