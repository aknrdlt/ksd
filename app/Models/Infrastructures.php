<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infrastructures extends Model
{
    use HasFactory;
    protected $table = 'infrastructures';

    protected $fillable = [
        'number',
        'desc',
        'image'
    ];
}
