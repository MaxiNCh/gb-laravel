<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  use HasFactory;

  protected $fillable = [
    'category_id', 'title', 'description', 'author', 'slug', 'published_at', 'status', 'image'
  ];

  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
