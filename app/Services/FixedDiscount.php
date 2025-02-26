<?php
namespace App\Services;

use App\Services\DiscountStrategy;

class FixedDiscount implements DiscountStrategy
{
    private float $discount;

    public function __construct(float $discount)
    {
        $this->discount = $discount;
    }
    public function calculateDiscount(float $amount): float
    {
        return max($amount - $this->discount, 0);
    }
}