<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'mediaable_type',
        'mediaable_id',
        'name',
        'alt',
        'is_image',
    ];

    public function mediaable(){
        return $this->mediaable();
    }
}
