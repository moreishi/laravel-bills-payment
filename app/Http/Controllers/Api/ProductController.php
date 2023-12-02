<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use Tests\Feature\Product\ProductUpdateFormTest;

use App\Services\ProductService;
use App\Repositories\ProductRepository;



use App\DTO\ProductDTO;

class ProductController extends Controller
{

    public $productService;
    public $productRepository;

    public function __construct(
        ProductService $productService, 
        ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->productRepository->findAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request)
    {
        $productDTO = new ProductDTO(
            $request->name,
            $request->description,
            $request->price,
            $request->quantity,
            $request->taxCategory,
            $request->imageUrl
        );

        return $this->productService->create($productDTO);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $productId)
    {
        return $this->productRepository->findById($productId);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, string $productId)
    {
        $productDTO = new ProductDTO(
            $request->name,
            $request->description,
            $request->price,
            $request->quantity,
            $request->taxCategory,
            $request->imageUrl
        );

        return $this->productService->update($productDTO, $productId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $productId)
    {
        return $this->productService->delete($productId);
    }
}
