<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Booking;
use App\Models\Product;
use App\Models\Payment;
use App\Models\User;
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
        $products;
        if($search) {
            if (Auth::user()->role == "Vendor") {
                $vendor_id = Auth::user()->id;                
                $products = DB::table('products')
                    ->where('name', "like", "%{$search}%")
                    ->where('vendor_id', $vendor_id)
                    ->paginate(6);                          
            } else {
                $products = DB::table('products')
                    ->where('name', "like", "%{$search}%")
                    ->where('stock', '>', '0')
                    ->paginate(6);            
            }            
        } else {
            if (Auth::user()->role == "Vendor") {
                $vendor_id = Auth::user()->id;                                
                $products = DB::table('products')
                    ->where('vendor_id', $vendor_id)
                    ->paginate(6);                        
            } else {
                $products = DB::table('products')
                ->where('stock', '>', '0')
                ->paginate(6);
            }
        }        
            
        if (Auth::user()->role == "Vendor") {  
            $products = Product::with('user')->where('vendor_id', Auth::user()->id)->paginate(6);
            $bookings = Booking::with('product', 'user')->whereHas('product', function($query){
                $query->where('vendor_id', Auth::user()->id);  
            })
            ->get();        
            return view('vendor.home', ['products' => $products, 'bookings' => $bookings]);  
        } else {   
                     
            return view('tourist.home', ['products' => $products]);
        }
    }

    public function listView(Request $request, $id)
    {        
        if($id == "All"){
            $products = DB::table('products')
                ->where('stock', '>', '0')
                ->paginate(6);
        } else {
            $products = DB::table('products')
                ->where('category', "like", "%{$id}%")
                ->paginate(6);
        }
                       
        return view('tourist.home', ['products' => $products]);   
    }
}
