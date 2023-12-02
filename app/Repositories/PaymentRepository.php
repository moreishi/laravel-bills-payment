<?php

namespace App\Repositories;

use App\Interfaces\IPaymentRepository;

use App\Models\Payment;
use Illuminate\Pagination\LengthAwarePaginator;

class PaymentRepository implements IPaymentRepository {

    public function findAll() : LengthAwarePaginator {
        return Payment::paginate(15);
    }

    public function findById($paymentId) : Payment {
        return Payment::find($paymentId);
    }

}