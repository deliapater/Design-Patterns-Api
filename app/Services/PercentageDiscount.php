<?php

namespace App\Services;

class PercentageDiscount implements DiscountStrategy
{
    private float $percentage;

    public function __construct(float $percentage)
    {
        $this->percentage = $percentage;
    }
    public function calculateDiscount(float $amount): float
    {
        return $amount - ($amount * ($this->percentage / 100));
    }
}