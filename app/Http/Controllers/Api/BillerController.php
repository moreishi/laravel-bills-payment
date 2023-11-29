<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BillerCreateFormRequest;
use App\Http\Requests\BillerUpdateFormRequest;

use App\Repositories\BillerRepository;
use App\Services\BillerService;
use App\DTO\BillerDTO;

class BillerController extends Controller
{

    public $billerRepository;
    public $billerService;

    public function __construct(
        BillerRepository $billerRepository, 
        BillerService $billerService)
    {
        $this->billerRepository = $billerRepository;
        $this->billerService = $billerService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->billerRepository->findAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BillerCreateFormRequest $request)
    {
        $billerDTO = new BillerDTO(
        $request->billerName,
        $request->billerCode,
        $request->billerDescription);

        return $this->billerService->create($billerDTO);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BillerUpdateFormRequest $request, string $id)
    {
        $billerDTO = new BillerDTO(
        $request->billerName,
        $request->billerCode,
        $request->billerDescription);

        return $this->billerService->update($billerDTO, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->billerService->delete($id);
    }
}
