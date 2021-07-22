<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = Category::all();
    return view('admin.categories', [
      'categories' => $categories
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.categoryAdd');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CategoryRequest $request)
  {
    $data = $request->validated();
    $category = Category::create($data);

    if ($category) {
      return redirect()->route('admin.categories.index')
        ->with('success', 'Запись успешно создана');
    }

    return back()->with('error', 'Не удалось создать запись');
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
  public function edit(Category $category)
  {
    return view('admin.categoryEdit', [
      'category' => $category
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(CategoryRequest $request, Category $category)
  {
    $data = $request->validated();

    $statusCategory = $category->fill($data)->save();

    if ($statusCategory) {
      return redirect()->route('admin.categories.index')
        ->with('success', 'Category succesfully updated');
    }

    return back()->with('error', 'Category was not updated');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Category $category)
  {
    try {
      $category->delete();
      return new JsonResponse([
        'message' => 'Category succesfully deleted',
        'success' => true
      ], 200);
    } catch (\Exception $ex) {
      if ($ex->getCode() === '23000') {
        return new JsonResponse([
          'message' => 'Category cannot be deleted from DB',
          'errorCode' => $ex->getCode(),
          'success' => false
        ], 500);
      } else {
        return new JsonResponse([
          'message' => $ex->getMessage(),
          'errorCode' => $ex->getCode(),
          'success' => false
        ], 500);
      }
    }
  }
}
