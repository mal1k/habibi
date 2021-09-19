<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class takeaway extends Model
{
    use HasFactory;
    protected $table = 'takeaway';
    protected $fillable = [
    'image',
    'title',
    'price',
    ];
}
