<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Product;
use App\Models\Payment;
use App\Models\User;
use Auth;
use PDF;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id)
    {        
        return view('tourist.booking.create', ['product_id' => $product_id]);        
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
            'quantity' => 'required',
            'start_date' => 'required',
            'total_days' => 'required',                    
        ]);

        $productBooking = Product::find($request->get('product_id'));   
        if ($productBooking->stock >= $request->get('quantity')) {
            $authUser = Auth::user();
            $booking = new Booking;
            $booking->tourist_id = $authUser->id;
            $booking->product_id = $request->get('product_id');
            $booking->quantity = $request->get('quantity');
            $booking->start_date = $request->get('start_date');
            $booking->total_days = $request->get('total_days');
            $booking->status = 'BOOKED';                                
            
            $booking->total_price = $productBooking->unit_price * $request->get('total_days') * $request->get('quantity');                
            
            $product = new Product;
            $product->id = $request->get('product_id');        
            $booking->product()->associate($product);    

            $user = new User;
            $user->id = $booking->tourist_id;        
            $booking->user()->associate($user);   

            $booking->save();                   
            
            $booking = Booking::with('product')->where('id', $booking->id)->first();        
            
            // redirect after add data
            return view('tourist.booking.payment', ['booking' => $booking]);            
        } else {
            return redirect()->route('booking.create', $request->get('product_id'))
            ->with('failed', 'Product stock is less than quantity');            
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //        
    }

    public function cancel(Request $request)
    {
        $booking = Booking::find($request->get('booking_id'));
        $booking->status = 'CANCELED';
        $booking->save();

        $product = Product::find($booking->product_id)->first();
        $product->stock += $booking->quantity;
        $product->save();
        
        $booking = Booking::with('product')->where('id', $booking->id)->first();        
        return redirect()->route('payment.cancel', $booking->id);
    }

    public function done(Request $request)
    {
        $booking = Booking::find($request->get('booking_id'));              
        $booking->status = 'DONE';
        $booking->save();
        
        $product = Product::find($booking->product_id)->first();
        $product->stock += $booking->quantity;
        $product->save();
        return redirect()->route('home')
            ->with('success', 'Booking has been marked as done');
    }

    public function bookingList() {
            $bookings = Booking::with('product', 'user')->where('tourist_id', Auth::user()->id)->get();         
            return view('tourist.booking.index', ['bookings' => $bookings]);
        
    }

    public function print_pdf(Request $request, $id){
        $booking = Booking::find($id); 
        $pdf = PDF::loadview('tourist.booking.booking_pdf', ['booking'=>$booking]);
        return $pdf->stream(); 
    }
}
