<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Admin\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'cart_id',
        'payment_type',
        'payment_status',
        'status',
        'total_price',
        'luxaurosub_total',
        'shipping_charge',
        'discount',
        'over_all_total',
        'user_id',
    ];

//    public function  getCartAttributeCart()
//     {
//         json_decode($this->cart_id);

//     }

    public function cart()
    {

        return $this->hasMany(Cart::class,'id','cart_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
