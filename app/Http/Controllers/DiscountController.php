<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DiscountContext;
use App\Services\PercentageDiscount;
use App\Services\FixedDiscount;

class DiscountController extends Controller
{
    public function applyDiscount(Request $request)
    {
        $amount = $request->input('amount');
        $discountType = $request->input('type');
        $value = $request->input('value');

        $strategy = $discountType === 'percentage'
            ? new PercentageDiscount($value)
            : new FixedDiscount($value);
        
        $discountContext = new DiscountContext($strategy);

        $discountedPrice = $discountContext->applyDiscount($amount);
        return response()->json([
            'original_price' => $amount,
            'discounted_price' => $discountedPrice
        ]);
    }
}