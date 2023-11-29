<?php

namespace App\Services;

use App\Interfaces\IBillerService;
use App\DTO\BillerDTO;
use App\Models\Biller;

class BillerService implements IBillerService {

    public function create(BillerDTO $billerDTO) : Biller {

        $biller = Biller::create([
            'billerName' => $billerDTO->billerName,
            'billerCode' => $billerDTO->billerCode,
            'billerDescription' => $billerDTO->billerDescription
        ]);

        return $biller;
    }

    public function update(BillerDTO $billerDTO, int $billerId) : Biller {

        $biller = Biller::find($billerId);
        $biller->billerName = $billerDTO->billerName;
        $biller->billerCode = $billerDTO->billerCode;
        $biller->billerDescription = $billerDTO->billerDescription;
        $biller->save();

        return $biller;

    }

    public function delete(int $billerId) {
        
        if(Biller::find($billerId)) {
            Biller::destroy($billerId);
            return true;
        }
        
        return false;
    }

}