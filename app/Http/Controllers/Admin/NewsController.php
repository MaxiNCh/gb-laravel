<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $news = News::with('category')->orderBy('created_at', 'desc')->paginate(15);
    return view('admin.news', [
      'newsList' => $news
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categories = new Category();
    return view('admin.newsAdd', [
      'categories' => $categories->getTitles()
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $request->validate([
      'title' => ['required', 'string'],
      'description' => ['nullable', 'string'],
      'author' => ['required', 'string'],
      'category_id' => ['required', 'integer'],
      'status' => ['required']
    ]);

    $data = request()->only('category_id', 'title', 'description', 'author');
    $data['slug'] = Str::slug($data['title']);

    $news = News::create($data);

    if ($news) {
      return redirect()->route('admin.news.index')->with('success', 'News was succesfully created');
    }

    return back()->with('error', 'News was not created');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(News $news)
  {
    $categories = Category::all('id', 'title');
    return view('admin.newsEdit', [
      'news' => $news,
      'categories' => $categories
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, News $news)
  {
    $request->validate([
      'title' => ['required', 'string'],
      'description' => ['nullable', 'string'],
      'author' => ['required', 'string'],
      'category_id' => ['required', 'integer'],
      'status' => ['required']
    ]);

    $data = $request->only('category_id', 'title', 'description', 'author');
    $data['slug'] = Str::slug($data['title']);

    $statusNews = $news->fill($data)->save();

    if ($statusNews) {
      return redirect()->route('admin.news.index')->with('success', 'News succesfully updated');
    }

    return back()->with('error', 'News was not updated');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(News $news)
  {
    try {
      $news->delete();
    } catch (\Exception $ex) {
      report($ex);
    }
  }
}
