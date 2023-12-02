<?php

namespace Tests\Feature\Product;

use Tests\Feature\Product\ProductBaseTest;
use App\Models\Product;


class ProductUpdateFormTest extends ProductBaseTest
{
    public function test_update_biller(): void
    {

        $product = Product::factory()->create();
        $model = Product::factory()->make();

        $response = $this->actingAs(ProductBaseTest::mockAsUser())->put(ProductBaseTest::HTTP_API_PRODUCT. '/' . $product->id, [
            'name' => $model->name,
            'description' => $model->description,
            'price' => $model->price,
            'quantity' => $model->quantity,
            'taxCategory' => $model->taxCategory,
            'imageUrl' => $model->imageUrl,
        ]);

        $content = json_decode($response->content());

        $response->assertStatus(200);
        
        $this->assertEquals($model->name, $content->name);
        $this->assertEquals($model->description, $content->description);
        $this->assertEquals($model->price, $content->price);
        $this->assertEquals($model->quantity, $content->quantity);
        $this->assertEquals($model->taxCategory, $content->taxCategory);
        $this->assertEquals($model->imageUrl, $content->imageUrl);
    }

    public function test_update_biller_failed(): void
    {

        $product = Product::factory()->create();

        $response = $this->actingAs(ProductBaseTest::mockAsUser())->put(ProductBaseTest::HTTP_API_PRODUCT. '/' . $product->id, [
            'name' => null,
            'description' => null,
            'price' => null,
            'quantity' => null,
            'taxCategory' => null,
            'imageUrl' => null,
        ]);

        $response->assertStatus(422);
    
    }

}
