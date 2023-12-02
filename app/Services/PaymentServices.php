<?php

namespace App\Services;

use App\Interfaces\IPaymentService;
use App\DTO\PaymentDTO;
use App\Models\Payment;

class PaymentServices implements IPaymentService {

    public function create(PaymentDTO $paymentDTO)  : Payment
    {
        $payment = new Payment;
        $payment->amount = $paymentDTO->amount;
        $payment->client_id = $paymentDTO->clientId;
        $payment->invoice_id = $paymentDTO->invoiceId;
        $payment->payment_at = $paymentDTO->paymentAt;
        $payment->payment_type = $paymentDTO->paymentType;
        $payment->transaction_reference = $paymentDTO->transactionReference;
        $payment->save();

        return $payment;
    }

    public function update(PaymentDTO $paymentDTO, int $paymentId) : Payment
    {
        $payment = Payment::find($paymentId);
        $payment->amount = $paymentDTO->amount;
        $payment->client_id = $paymentDTO->clientId;
        $payment->invoice_id = $paymentDTO->invoiceId;
        $payment->payment_at = $paymentDTO->paymentAt;
        $payment->payment_type = $paymentDTO->paymentType;
        $payment->transaction_reference = $paymentDTO->transactionReference;
        $payment->save();

        return $payment;
    }

    public function delete(int $paymentId)
    {
        $message = false;
        $status = 409;

        if(Payment::find($paymentId) && Payment::destroy($paymentId)) {
            $message = true;
            $status = 200;
        }

        return response(['message' => $message], $status);
    }

}