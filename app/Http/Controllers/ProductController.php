<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = '.dashboard.pages.';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellingProducts = Product::with('sales')->get();

        $totalSellingProducts = [];

        foreach($sellingProducts as $sellingProduct) {
           
            $totalSellingProducts[] = [
                'product' => $sellingProduct->name,
                'total_sale' => $sellingProduct->sales->count() ?? 0,
            ];
        }
        return view($this->view . 'total-selling-product', compact('totalSellingProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
