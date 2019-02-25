<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('rest', 'RestTestController')->names('restTest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

$groupData = [
  'namespace' => 'Blog\Admin',
  'prefix' => 'admin/blog'
];

//контроллер категории
Route::group($groupData, function () {
    $method = ['index', 'edit' , 'update', 'create', 'store'];
    Route::resource('categories', 'CategoryController')
        ->only($method)
        ->names('blog.admin.categories');
});