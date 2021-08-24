<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfrastructureWords extends Model
{
    use HasFactory;
    protected $table = 'infrastructure_words';

    protected $fillable = [
        'word'
    ];
}
