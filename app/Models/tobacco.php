<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tobacco extends Model
{
    use HasFactory;
    protected $table = 'tobacco';
    protected $fillable = [
        'image',
        'title',
        'price'
    ];
}
