<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompanyWords extends Model
{
    use HasFactory;

    protected $table = 'about_company_words';

    protected $fillable = [
        'word'
    ];
}
