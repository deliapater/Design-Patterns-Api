<?php
namespace App\Http\Controllers;

use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function index()
    {
        return response()->json($this->productRepo->getAll());
    }
}