<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'email',
        'password',
        'phone',
        'bio',
        'specialization',
        'street',
        'city',
        'state',
        'country',                                                                                
        'postal_code', 
        'role',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function course(){
        return $this->hasMany(Course::class);
    }
    public function blog(){
        return $this->hasMany(Blog::class);
    }

    public function category(){
        return $this->hasOneThrough(
            Category::class,
            Product::class,
            'user_id', // Foreign key on the environments table...
            'id', // Foreign key on the deployments table...
            'id', // Local key on the users table...
            'category_id' // Local key on the product table...
        );
    }

    public function media(){
        return $this->hasMany(Media::class,'mediaable');
    }

    public function notifications(){
        return $this->hasMany(Notification::class);
    }

    public function socialMedia(){
        return $this->hasMany(SocialMedia::class);
    }
}
