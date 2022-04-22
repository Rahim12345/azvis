<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'name_az',
        'name_en',
        'name_ru',
        'slug_az',
        'slug_en',
        'slug_ru',
        'text_az',
        'text_en',
        'text_ru',
        'foto',
    ];
}
