<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'category_id',
        'category_parent_id',
        'title',
        'slug',
        'description',
        'duration',
        'props',
        'dificulty',
        'intensity',
        'is_active'
    ];

    public function author(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function parentCategory(){
        return $this->hasOneThrough(Category::class,Category::class,'parent_id','id');
    }

    public function media(){
        return $this->hasMany(Media::class,'mediaable');
    }
    
}
