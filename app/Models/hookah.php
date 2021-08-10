<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hookah extends Model
{
    use HasFactory;
    protected $table = 'hookah';
    protected $fillable = [
    'tobacco',
    'strength',
    'title',
    'price',
    'image',
    ];
}
