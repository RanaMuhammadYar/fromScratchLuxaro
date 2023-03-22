<?php

namespace App\Models\Admin;


use App\Models\User;
use App\Models\Admin\Category;
use App\Models\Admin\ProductType;
use App\Models\Admin\ShippingType;
use App\Models\Admin\DelivoryOption;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Pagination\LengthAwarePaginator;

class Product extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;
    protected $fillable = [
        'title',
        'description',
        'product_price',
        'category_id',
        'product_type_id',
        'delivory_option_id',
        'shipping_type_id',
        'image',
        'user_id',
        'shipping_charge',
        'tags',
        'status',
        'multiple_image',

    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function delivoryOption()
    {
        return $this->belongsTo(DelivoryOption::class);
    }
    public function shippingType()
    {
        return $this->belongsTo(ShippingType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ratings(){
        return $this->hasMany(Rating::class);
    }


}
