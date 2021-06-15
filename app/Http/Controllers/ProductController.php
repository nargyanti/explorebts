<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Product;
use DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('vendor.createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([            
            'category' => 'required',
            'picture' => 'required',
            'name' => 'required',
            'unit_price' => 'required',
            'stock' => 'required',
            'description' => 'required',
        ]);

        if ($request->file('picture')) {
            $image_name = $request->file('picture')->store('img/products', 'public');
        }
        
        $authUser = Auth::user();
        $product = new Product;
        $product->category = $request->get('category');
        $product->vendor_id = $authUser->id;
        $product->picture = $image_name;
        $product->name = $request->get('name');
        $product->unit_price = $request->get('unit_price');
        $product->stock = $request->get('stock');
        $product->description = $request->get('description');        
                               
        $user = new User;                
        $user->id = $product->vendor_id;                
        $product->user()->associate($user);        
        $product->save();                     

        // redirect after add data
        return redirect()->route('home')
            ->with('success', 'Product Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('vendor.updateProduct', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('vendor.updateProduct', ['product' => $product ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([            
            'category' => 'required',            
            'name' => 'required',
            'unit_price' => 'required',
            'stock' => 'required',
            'description' => 'required',
        ]);

        $product = Product::find($id);                
        $product->category = $request->get('category');                
        $product->name = $request->get('name');
        $product->unit_price = $request->get('unit_price');
        $product->stock = $request->get('stock');
        $product->description = $request->get('description');                                        

        if($request->file('picture')) {
            if ($product->picture && file_exists(storage_path('app/public/' . $product->picture))) {
                Storage::delete('public/' . $product->picture);                        
            }
            $image_name = $request->file('picture')->store('img/products', 'public');
            $product->picture = $image_name; 
        }

        $user = new User;                
        $user->id = $product->vendor_id;                
        $product->user()->associate($user);        
        $product->save();                     

        // redirect after add data
        return redirect()->route('home')
            ->with('success', 'Product Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('home')
            ->with('success', 'Product Successfully Deleted');
    }
}
