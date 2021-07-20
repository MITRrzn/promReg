<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'article_title',
        'article_description',
        'article_image',
    ];
}
