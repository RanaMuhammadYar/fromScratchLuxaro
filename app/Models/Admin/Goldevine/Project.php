<?php

namespace App\Models\Admin\Goldevine;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
        'slug',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
