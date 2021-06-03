<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [        
        'category',
        'picture',
        'name',
        'unit_price',        
        'stock',      
        'description',  
    ];

    public function user() 
    {        
        return $this->belongsTo(User::class, 'vendor_id', 'id');
    }
}
