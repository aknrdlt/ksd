<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfrastructureImages extends Model
{
    use HasFactory;
    protected $table = 'infrastructure_images';

    protected $fillable = [
        'image'
    ];
}
