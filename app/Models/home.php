<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;

    protected $table = 'home_page';
    protected $primaryKey = null;
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
      'left_block_img',
      'left_block_text',
      'upper_block_img',
      'upper_block_text',
      'central_block_img',
      'central_block_text',
      'lower_block_img',
      'lower_block_text',
    ];
}
