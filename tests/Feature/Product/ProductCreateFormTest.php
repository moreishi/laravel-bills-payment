<?php

namespace Tests\Feature\Product;

use Tests\Feature\Product\ProductBaseTest;
use App\Models\Product;

class ProductCreateFormTest extends ProductBaseTest
{
    
    public function test_create_product(): void
    {

        $model = Product::factory()->make();

        $response = $this->actingAs(ProductBaseTest::mockAsUser())->post(ProductBaseTest::HTTP_API_PRODUCT, [
            'name' => $model->name,
            'description' => $model->description,
            'price' => $model->price,
            'quantity' => $model->quantity,
            'taxCategory' => $model->taxCategory,
            'imageUrl' => $model->imageUrl,
        ]);

        $content = json_decode($response->content());
        
        $response->assertStatus(201);

        $this->assertEquals($model->name, $content->name);
        $this->assertEquals($model->description, $content->description);
        $this->assertEquals($model->price, $content->price);
        $this->assertEquals($model->quantity, $content->quantity);
        $this->assertEquals($model->taxCategory, $content->taxCategory);
        $this->assertEquals($model->imageUrl, $content->imageUrl);
    }

    public function test_create_product_failed(): void
    {

        $response = $this->actingAs(ProductBaseTest::mockAsUser())->post(ProductBaseTest::HTTP_API_PRODUCT, [
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
