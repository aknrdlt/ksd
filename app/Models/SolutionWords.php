<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionWords extends Model
{
    use HasFactory;

    protected $table = 'solution_words';

    protected $fillable = [
        'word'
    ];
}
