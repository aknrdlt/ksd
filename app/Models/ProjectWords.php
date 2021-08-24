<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectWords extends Model
{
    use HasFactory;
    protected $table = 'project_words';

    protected $fillable = [
        'word'
    ];
}
