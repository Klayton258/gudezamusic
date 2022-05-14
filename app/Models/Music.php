<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Music extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'm_cover',
        'm_title',
        'm_artist',
        'm_album',
    ];

    protected $dates = ['deleted_at'];
}
