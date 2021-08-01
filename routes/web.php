<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [MainController::class, 'index'])->name('main');



Route::group(['middleware' => 'auth'], function () {
  Route::get('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
  })->name('logout');
});

Route::group(['middleware' => 'guest'], function () {
  Route::get('/socialLogin', [LoginController::class, 'login'])->name('socialLogin');
  Route::get('/socialResponse', [LoginController::class, 'callback'])->name('socialResponse');
});

//admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {
  Route::view('/', 'admin.index')->name('index');
  Route::resource('news', AdminNewsController::class);
  Route::resource('categories', AdminCategoryController::class);
  Route::get('/store-rss', ParserController::class)->name('storeRss');
});

//fileManager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth', 'admin']], function () {
  \UniSharp\LaravelFilemanager\Lfm::routes();
});
