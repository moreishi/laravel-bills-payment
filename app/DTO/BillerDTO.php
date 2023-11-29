<?php

namespace App\DTO;

class BillerDTO {

    public $billerName;
    public $billerCode;
    public $billerDescription;

    public function __construct(
        $billerName, 
        $billerCode, 
        $billerDescription)
    {
        $this->billerName = $billerName;
        $this->billerCode = $billerCode;
        $this->billerDescription = $billerDescription;
    }

}