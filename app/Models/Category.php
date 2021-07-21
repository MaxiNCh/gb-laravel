<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;

  protected $fillable = [
    'title', 'description', 'color'
  ];

  public function news()
  {
    return $this->hasMany(News::class);
  }

  public function getTitles()
  {
    return $this->all(['id', 'title']);
  }
}
