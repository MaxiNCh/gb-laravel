<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminNewsTest extends TestCase
{

  public function test_admin_status()
  {
    $response = $this->get('/admin');

    $response->assertStatus(200);
  }

  public function test_admin_text()
  {
    $response = $this->get('/admin');

    $response->assertSeeText('main admin page');
  }


  public function test_admin_news_status()
  {
    $response = $this->get('/admin/news');

    $response->assertStatus(200);
  }

  public function test_admin_news_view()
  {
    $news = News::all();
    $view = $this->view('admin.news', [
      'newsList' => $news
    ]);

    $view->assertSee('table-responsive');
  }

  public function test_admin_news_edit()
  {
    $categories = Category::all();
    $news = News::all()->find(rand(1, 10));
    $view = $this->view('admin.newsEdit', [
      'news' => $news,
      'categories' => $categories
    ]);

    $view->assertSee('Edit news');
  }
}
