<?php

namespace App\Interfaces;

use App\Models\Biller;
use Illuminate\Pagination\LengthAwarePaginator;

interface IBillerRepository {

    public function findAll() : LengthAwarePaginator;

    public function findById(int $billerId) : Biller;

}