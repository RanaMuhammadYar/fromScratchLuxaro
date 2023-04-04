<?php

namespace App\Models;

use App\Models\Admin\DeliveryOption;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Charter extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function deliveryOption()
    {
        return $this->belongsToMany(DeliveryOption::class, 'product_delivery_options');
    }
}
