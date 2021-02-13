<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable=[
        'course_id',
        'status_id',
        'title',
        'description',
        'duration'
    ];


    public function media(){
        return $this->hasOne(Medai::class,'mediaable');
    }
    
}
