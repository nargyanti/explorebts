<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Product;

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
        $user = Auth::user();
        $products = Product::all();
        if ($user->role == "Vendor") {
            // return view('vendor.home', compact('user', 'product'));
            return view('vendor.home', ['products' => $products]);
        } else {
            // return view('tourist.home', compact('user', 'product'));
            return view('tourist.home', ['products' => $products]);
        }
    }
}
