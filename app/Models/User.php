<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Product;
use App\Models\Booking;
use App\Models\Transaction;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',        
        'phone',
        'role',
        'profile_picture',
        'balance',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function product() 
    {
        return $this->hasMany(Product::class);
    }

    public function product_booking() 
    {
        return $this->belongsToMany(Product::class, 'booking', 'tourist_id', 'product_id')->withPivot('quantity', 'start_date', 'total_days', 'status', 'total_price', 'created_at', 'update_at');
    }

    public function transaction() {
        return $this->hasMany(Transaction::class);
    }
}
