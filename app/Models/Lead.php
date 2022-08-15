<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=
    [
        'name',
        'birthday',
        'phone',
        'gener',
        'nacionality',
        'residence',
        'civilstate',
        'ocupation',
        'favorite_music_gener',
        'favorite_social_media',
        'favorite_digital_portal',
        'favorite_activity',
        'degree_level'
    ];
}
