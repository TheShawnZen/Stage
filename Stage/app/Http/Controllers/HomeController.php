<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use App\Models\MonthRecap;
use App\Models\MonthSales;
use App\Models\Orders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $graph = Graph::where('id', '1')->first();
        $mr = MonthRecap::where('id', '1')->first();
        $lists = MonthSales::all();
        $list = $lists->pluck('sales');
        $list->all();
        $orders = Orders::all();
        return view('home', [
            'graph' => $graph,
            'mr' => $mr,
            'list' => $list,
            'orders' => $orders
        ]);
    }
}
