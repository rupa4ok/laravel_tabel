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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::group(['namespace' => 'Blog', 'prefix' => 'blog'], function () {
    Route::resource('posts','PostController')->names('blog.posts');
});

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
    Route::resource('posts', 'PostController')
        ->except(['show'])
        ->names('blog.admin.posts');
});