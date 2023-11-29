<?php

namespace App\Interfaces;

use App\DTO\BillerDTO;
use App\Models\Biller;

interface IBillerService {

    public function create(BillerDTO $billerDTO) : Biller;

    public function update(BillerDTO $billerDTO, int $billerId) : Biller;

    public function delete(int $billerId);

}