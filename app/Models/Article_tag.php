<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_tag extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'article_tag';
}

