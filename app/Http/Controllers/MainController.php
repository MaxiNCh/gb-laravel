<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index()
  {
    $news = News::with('category')->orderBy('published_at')->paginate(10);
    $categories = Category::all();
    return view('index', [
      'newsList' => $news,
      'categories' => $categories
    ]);
  }
}
