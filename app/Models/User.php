<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    protected $guarded = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','zip_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function images()
    {
            return $this->hasMany(Upload::class,'id','user_profile_image');
    }
    public function userDetails()
    {
        return $this->hasMany(UserDetail::class);
    }
    public function userEducations()
    {
        return $this->hasMany(UserEduction::class);
    }
    public function userProfessions()
    {
        return $this->hasMany(UserProfession::class);
    }
    public function userCertificates()
    {
        return $this->hasMany(UserCertificate::class);
    }
}
