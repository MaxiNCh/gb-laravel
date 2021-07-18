<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index']);

Route::get('authorization', [AuthorizationController::class, 'index'])->name('auth');

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
  Route::view('/', 'admin.index');
  Route::resource('news', AdminNewsController::class);
  Route::resource('categories', AdminCategoryController::class);
});
