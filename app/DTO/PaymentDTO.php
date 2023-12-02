<?php

namespace App\DTO;

class PaymentDTO {

    public $amount;
    public $clientId;
    public $invoiceId;
    public $paymentAt;
    public $paymentType;
    public $transactionReference;

    public function __construct(
        $amount,
        $clientId,
        $invoiceId,
        $paymentAt,
        $paymentType,
        $transactionReference
    )
    {
        $this->amount = $amount;
        $this->clientId = $clientId;
        $this->invoiceId = $invoiceId;
        $this->paymentAt = $paymentAt;
        $this->paymentType = $paymentType;
        $this->transactionReference = $transactionReference;
    }

}