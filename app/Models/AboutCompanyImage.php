<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompanyImage extends Model
{
    use HasFactory;

    protected $table = 'about_company_images';

    protected $fillable = [
        'image'
    ];
}
