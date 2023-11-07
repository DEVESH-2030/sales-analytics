<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Category;
use App\Http\Requests\StoreSalesRequest;
use App\Http\Requests\UpdateSalesRequest;

class SalesController extends Controller
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
        $sales = Sales::selectRaw(config('variable.sales_raw_query'))
            ->groupBy('month')
            ->orderByRaw(config('variable.sort_months'))
            ->get();
        return view($this->view . 'total-sales', compact('sales'));
    }

    /**
     * Display a listing of the resource.
     */
    public function salesByCategory()
    {

        // total product sales by category data
        $categories = Category::with('products')->orderBy('name')->get();

        $salesByCategory = $categories->flatMap(function ($category) {
            return $category->products->map(function ($product) use ($category) {
                $totalproducts = $product->sales->count() ?? 0;
                return [
                    'category' => $category->name,
                    'total_sale_products' => $totalproducts,
                ];
            });
        })->groupBy('category')->map(function ($group) {
            return [
                'category' => $group->first()['category'],
                'total_sale_products' => $group->sum('total_sale_products'),
            ];
        })->values()->toArray();

        return view($this->view . 'sales-by-category', compact('salesByCategory'));
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
    public function store(StoreSalesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSalesRequest $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
