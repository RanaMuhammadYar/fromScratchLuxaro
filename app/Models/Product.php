<?php

namespace App\Models;

use App\Models\CharterCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'from_charter_side',
        'type',
        'tags',
        'charter_category_id',
        'delivery_option_id',
        'shipping_type',
        'shipping_charge',
    ];

    // public function charterCategory()
    // {
    //     return $this->hasMany(CharterCategory::class);
    // }

    // public function deliveryOption()
    // {
    //     return $this->belongsTo(DeliveryOption::class);
    // }

    // public function shippingType()
    // {
    //     return $this->belongsTo(ShippingType::class);
    // }

    // public function getTagsAttribute($value)
    // {
    //     return json_decode($value);
    // }

    // public function getCharterCategoryIdAttribute($value)
    // {
    //     return json_decode($value);
    // }

    // public function getDeliveryOptionIdAttribute($value)
    // {
    //     return json_decode($value);
    // }

    // public function getShippingTypeAttribute($value)
    // {
    //     return json_decode($value);
    // }

    // public function setTagsAttribute($value)
    // {
    //     $this->attributes['tags'] = json_encode($value);
    // }

    // public function setCharterCategoryIdAttribute($value)
    // {
    //     $this->attributes['charter_category_id'] = json_encode($value);
    // }



}
