<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'value',
        'remark',
        'icon_font',
        'icon_svg'
    ];
}
