<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Booking;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [        
        'amount',        
        'sender_id',
        'receiver_id',
        'booking_id',
    ];

    public function sender() 
    {        
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }

    public function receiver() 
    {        
        return $this->belongsTo(User::class, 'receiver_id', 'id');
    }    

    public function booking() 
    {        
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    } 
}
