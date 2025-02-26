<?php

namespace App\Services;

interface DiscountStrategy {
    public function calculateDiscount(float $amount): float;
}