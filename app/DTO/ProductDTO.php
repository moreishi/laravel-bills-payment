<?php

namespace App\DTO;

class ProductDTO {

    public $name;
    public $description;
    public $price;
    public $quantity;
    public $taxCategory;
    public $imageUrl;

    public function __construct(
        $name, 
        $description, 
        $price, 
        $quantity,
        $taxCategory, 
        $imageUrl)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->taxCategory = $taxCategory;
        $this->imageUrl = $imageUrl;
    }

}