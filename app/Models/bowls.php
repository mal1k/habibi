<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bowls extends Model
{
    use HasFactory;
    protected $table = 'bowls';
    protected $fillable = [
    'image',
    'title',
    'price',
    ];
}
