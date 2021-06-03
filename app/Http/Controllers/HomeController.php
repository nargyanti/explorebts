<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
use DB;

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
        $search = request()->query('search');        
        if($search) {
            $products = DB::table('products')
                    ->where('name', "like", "%{$search}%")
                    ->paginate(6);            
        } else {
            $products = DB::table('products')
                    ->paginate(6);
        }        
        
        if (Auth::user()->role == "Vendor") {            
            return view('vendor.home', ['products' => $products]);
        } else {            
            return view('tourist.home', ['products' => $products]);
        }
    }
}
