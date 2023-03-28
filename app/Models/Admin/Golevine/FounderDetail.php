<?php

namespace App\Models\Admin\Golevine;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FounderDetail extends Model
{
    use HasFactory;
    protected $table = 'founder_details';
    protected $fillable = [
        'business_address',
        'city',
        'business_category',
        'zip_code',
        'email',
        'website',
        'phone',
        'ein',
        'bank_account',
        'cart_number',
        'project_id',
        'user_id',
    ];
}
