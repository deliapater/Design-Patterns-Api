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
        $context = new DiscountContext();

        switch ($request->discount_type) {
            case 'percentage':
                $context->setStrategy(new PercentageDiscount());
                break;
            case 'fixed':
                $context->setStrategy(new FixedDiscount());
                break;
            default:
                return response()->json(['error' => 'Invalid discount type'], 400);
        }

        $discountedPrice = $context->applyDiscount($request->amount);
        return response()->json(['discounted_price' => $discountedPrice]);
    }
}