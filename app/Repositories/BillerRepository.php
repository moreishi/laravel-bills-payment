<?php

namespace App\Repositories;

use App\Interfaces\IBillerRepository;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Models\Biller;

class BillerRepository implements IBillerRepository {

    public function findAll() : LengthAwarePaginator
    {
        return Biller::paginate(15);
    }

    public function findById(int $billerId) : Biller
    {
        return Biller::find($billerId);
    }

}