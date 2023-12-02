<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\PaymentRepository;
use App\Services\PaymentServices;
use App\DTO\PaymentDTO;

class PaymentController extends Controller
{

    public $paymentRepository;
    public $paymentServices;

    public function __construct(
        PaymentRepository $paymentRepository, 
        PaymentServices $paymentServices)
    {
        $this->paymentRepository = $paymentRepository;
        $this->paymentServices = $paymentServices;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->paymentRepository->findAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paymenDTO = new PaymentDTO(
            $request->amount,
            $request->clientId,
            $request->invoiceId,
            $request->paymentAt,
            $request->paymentType,
            $request->transactionReference,
        );

        return $this->paymentServices->create($paymenDTO);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $paymentId)
    {
        return $this->paymentRepository->findById($paymentId);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $paymentId)
    {
        $paymenDTO = new PaymentDTO(
            $request->amount,
            $request->clientId,
            $request->invoiceId,
            $request->paymentAt,
            $request->paymentType,
            $request->transactionReference
        );

        return $this->paymentServices->update($paymenDTO, $paymentId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $paymentId)
    {
        return $this->paymentServices->delete($paymentId);
    }
}
