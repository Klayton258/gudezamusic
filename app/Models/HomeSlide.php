<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeSlide extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'slide_title',
    'description',
    'slide_cover',
    'link_direct',
    'links',
    ];

    protected $dates = ['deleted_at'];

}


