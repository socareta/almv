<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'user_id',
        'name',
        'slug',
    ];

    public function blogs(){
        return $this->hasMany(Blog::class,'blog_id','id');
    }
}
