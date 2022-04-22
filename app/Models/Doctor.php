<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    protected $fillable = [
        'name_az',
        'name_en',
        'name_ru',
        'vezife_az',
        'vezife_en',
        'vezife_ru',
        'about_az',
        'about_en',
        'about_ru',
        'src'
    ];
}
