<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscribers extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'sb_name',
    'sb_email',
    ];

    protected $dates = ['deleted_at'];
}
