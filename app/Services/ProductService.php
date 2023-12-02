<?php

namespace App\Services;

use App\DTO\ProductDTO;
use App\Models\Product;

class ProductService {

    public function create(ProductDTO $productDTO) : Product {
        
        $product = Product::create([
            'name' => $productDTO->name,
            'description' => $productDTO->description,
            'price' => $productDTO->price,
            'quantity' => $productDTO->quantity,
            'taxCategory' => $productDTO->taxCategory,
            'imageUrl' => $productDTO->imageUrl,
        ]);

        return $product;

    }

    public function update(ProductDTO $productDTO, int $productId) : Product {

        $product = Product::find($productId);
        $product->name = $productDTO->name;
        $product->description = $productDTO->description;
        $product->price = $productDTO->price;
        $product->quantity = $productDTO->quantity;
        $product->taxCategory = $productDTO->taxCategory;
        $product->imageUrl = $productDTO->imageUrl;
        $product->save();

        return $product;
    }

    public function delete(int $productId) {

        $message = false;
        $status = 409;

        if(Product::find($productId) && Product::destroy($productId)) {
            $message = true;
            $status = 200;
        }

        return response(['message' => $message], $status);
        
    }

}