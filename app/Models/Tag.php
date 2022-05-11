<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    public $timestamps = false;
    public function articles()
  {
    return $this->belongsToMany(Article::class, 'article_tag', 'tag_id', 'article_id');
  }

  public function articles_name($name)
  {
    return $this->belongsToMany(Article::class, 'article_tag', 'article_id', 'tag_id')->wherePivot('name', 1);
  }
}

