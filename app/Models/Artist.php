<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'artist_name',
        'artist_image',
        'artist_bio',
        'artist_facebook',
        'artist_instagram',
        'artist_twitter'
    ];

    protected $dates = ['deleted_at'];
}
