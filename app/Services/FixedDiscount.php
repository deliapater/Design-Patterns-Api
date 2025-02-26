<?php
namespace App\Services;

use App\Services\DiscountStrategy;

class FixedDiscount implements DiscountStrategy
{
    public function calculateDiscount(float $amount): float
    {
        return $amount - 10;
    }
}