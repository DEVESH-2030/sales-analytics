<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Sales;
use App\Models\Product;
use App\Enums\StatusEnum;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashbboardController extends Controller
{
    protected $view;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->view = '.dashboard.';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sales = Sales::paginate(10);
        return view($this->view . 'layout.app', compact('sales'));
    }

    /**
     * Display a listing of the resource.
     */
    public function revenueTrends()
    {
        $revenues = $this->calculateSalesAndRevenue();

        return view($this->view . 'pages.revenue-trends', compact('revenues'));
    }

    /**
     * Display a listing of the resource.
     */
    public function manageAllSalesAnalytics()
    {

        // total sales data
        $sales = $this->calculateSalesAndRevenue();

        // total customer data
        $users = User::selectRaw('DATE_FORMAT(created_at, "%b") as month, count(id) as total_user')
            ->groupBy('month')
            ->orderByRaw(config('variable.sort_months'))
            ->get();

        // total order status data
        $orders = Order::select('status', DB::raw('count(id) as total_orders'))
            ->groupBy('status')
            // ->orderByRaw('FIELD(status, "'.implode('","', [StatusEnum::DELIVERED, StatusEnum::PROCESSING, StatusEnum::SHIPPING]).'")')
            ->get();

        // total revenue data
        $revenues = $this->calculateSalesAndRevenue();


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

        // total selling products data
        $sellingProducts = Product::with('sales')->get();

        $totalSellingProducts = [];

        foreach ($sellingProducts as $sellingProduct) {

            $totalSellingProducts[] = [
                'product' => $sellingProduct->name ?? '',
                'total_sale' => $sellingProduct->sales->count() ?? 0,
            ];
        }

        return view($this->view . '_analytics_', compact('revenues', 'users', 'sales', 'orders', 'salesByCategory', 'totalSellingProducts'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function calculateSalesAndRevenue()
    {
        return Sales::selectRaw(config('variable.sales_raw_query'))
            ->groupBy('month')
            ->orderByRaw(config('variable.sort_months'))
            ->get();
    }
}
