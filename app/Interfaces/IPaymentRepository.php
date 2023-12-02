<?php

namespace App\Interfaces;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Payment;

interface IPaymentRepository {

    public function findAll() : LengthAwarePaginator;

    public function findById(int $paymentId) : Payment;

}