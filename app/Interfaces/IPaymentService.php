<?php

namespace App\Interfaces;

use App\DTO\PaymentDTO;

interface IPaymentService {

    public function create(PaymentDTO $paymentDTO);

    public function update(PaymentDTO $paymentDTO, int $paymentId);

    public function delete(int $paymentId);

}