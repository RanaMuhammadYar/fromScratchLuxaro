<?php

namespace App\Models\Admin\Goldevine;

use App\Models\User;
use Illuminate\Support\Str;
use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Golevine\FounderDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    use Taggable;
    protected $fillable = [
        'title',
        'short_description',
        'project_category',
        'feature_image_project',
        'gallery_image',
        'video_link',
        'start_date',
        'end_date',
        'minimum_pledge_amount',
        'maximum_pledge_amount',
        'project_funding_goal',
        'recommended_pledge_amount',
        'location',
        'description',
        'status',
        'slug',
        'user_id',
        'tags'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projectBenefits()
    {
        return $this->hasMany(ProjectBenefit::class);
    }

    public function setAttribute($key, $value)
    {
        if ($key == 'title') {
            $this->attributes['slug'] = Str::slug($value);
        }
        parent::setAttribute($key, $value);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getTagsAttribute($value)
    {
        return $this->tagNames();
    }

    public function FounderDetail()
    {
        return $this->hasOne(FounderDetail::class,'project_id','id');
    }
}
