<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bar extends Model
{
    use HasFactory;
    protected $table = 'bar';
    protected $fillable = [
        'image',
        'title',
        'description',
        'price',
        'category',
    ];
}
