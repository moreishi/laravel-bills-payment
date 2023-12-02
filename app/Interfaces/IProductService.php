<?php

namespace App\Interfaces;

use App\DTO\ProductDTO;
use App\Models\Product;

interface IProductService {

    public function create(ProductDTO $productDTO) : Product;

    public function update(ProductDTO $productDTO) : Product;

    public function delete(int $productId);

}