<?php

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;
    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'product_type_id',
        'delivory_option_id',
        'shipping_type_id',
        'image',
    ];
}
