<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminCategoriesTest extends TestCase
{

  public function test_admin_categories_status()
  {
    $response = $this->get('/admin/categories');

    $response->assertStatus(200);
  }

  public function test_admin_categories_view()
  {
    $categories = Category::all();
    $view = $this->view('admin.categories', [
      'categories' => $categories
    ]);

    $view->assertSee('table-responsive');
  }

  public function test_admin_category_edit()
  {
    $category = Category::all()->find(rand(1, 10));
    $view = $this->view('admin.categoryEdit', [
      'category' => $category
    ]);

    $view->assertSee('Edit category');
  }

  public function test_admin_category_add()
  {
    $view = $this->view('admin.categoryAdd');

    $view->assertSee('Create category');
  }
}
