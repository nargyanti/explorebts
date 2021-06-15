<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Payment;
use App\Models\Product;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [        
        'quantity',
        'start_date',
        'total_days',
        'status',                                
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function user() 
    {        
        return $this->belongsTo(User::class, 'tourist_id', 'id');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
