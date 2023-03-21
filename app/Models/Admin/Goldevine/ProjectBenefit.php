<?php

namespace App\Models\Admin\Goldevine;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectBenefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'benefit_name',
        'price',
        'benefit_msrp',
        'feature_image',
        'estimated_delivery_date',
        'quantity',
        'short_description',
        'project_id',
        'user_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
