<?php

namespace App\Services;

use App\Services\DiscountStrategy;

class DiscountContext
{
    private DiscountStrategy $strategy;

    public function __construct(DiscountStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(DiscountStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function applyDiscount($amount)
    {
        return $this->strategy->calculateDiscount($amount);
    }
}