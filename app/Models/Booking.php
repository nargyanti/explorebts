<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [        
        'quantity',
        'start_date',
        'total_days',
        'status',                                
    ];

    public function user() 
    {        
        return $this->belongsTo(User::class);
    }
}
