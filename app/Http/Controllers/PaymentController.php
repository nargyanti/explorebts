<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;

class PaymentController extends Controller
{
    public function index($booking)
    {        
        return view('tourist.booking.payment', ['booking' => $booking]);
    }

    public function store(Request $request)
    {
        $product = Product::find($request->get('product_id'));

        $payment = new Payment;    
        $payment->booking_id = $request->get('booking_id');
        $payment->sender_id = $request->get('sender_id');
        $payment->receiver_id = $product->vendor_id;        
        $payment->amount = $request->get('amount');

        $booking = new Booking;
        $booking->id = $payment->booking_id;
        $payment->booking()->associate($booking);        

        $sender = new User;
        $sender->id = $payment->sender_id;
        $payment->sender()->associate($sender);

        $receiver = new User;
        $receiver->id = $payment->receiver_id;
        $payment->receiver()->associate($receiver);

        $payment->save();        
        
        $booking = Booking::where('id', $booking->id)->first();
        $product->stock -= $booking->quantity;    
        $product->save();                   

        $sender = User::find($request->get('sender_id'));
        $sender->balance -= $payment->amount;
        $sender->save();
        
        $receiver = User::find($product->vendor_id);        
        $receiver->balance += $payment->amount;
        $receiver->save();

        return redirect()->route('home')
            ->with('success', 'Booking Successfully Added');
    }

    public function cancel(Request $request, $booking_id) {        
        $booking = Booking::with('product', 'user')->where('id', $booking_id)->first();        
        
        $payment = new Payment;    
        $payment->booking_id = $booking_id;
        $payment->sender_id = $booking->product->vendor_id;
        $payment->receiver_id = $booking->tourist_id;
        $payment->amount = $booking->total_price;

        $booking = new Booking;
        $booking->id = $payment->booking_id;
        $payment->booking()->associate($booking);

        $sender = new User;
        $sender->id = $payment->sender_id;
        $payment->sender()->associate($sender);

        $receiver = new User;
        $receiver->id = $payment->receiver_id;
        $payment->receiver()->associate($receiver);

        $payment->save();        

        $sender = User::find($payment->sender_id);
        $sender->balance -= $payment->amount;
        $sender->save();
        
        $receiver = User::find($payment->receiver_id);        
        $receiver->balance += $payment->amount;
        $receiver->save();
        
        return redirect()->route('home')
            ->with('success', 'Booking Successfully Canceled');
    }
}
