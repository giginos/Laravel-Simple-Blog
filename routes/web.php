<?php

/*--------------------------------------------------------------------------
| / front-end
|-------------------------------------------------------------------------*/
  //Blog
  Route::get('/', 'BlogController@main');
  //search-category
  Route::get('/search/category/{category}', 'BlogController@searchCategory');
  //search-tag
  Route::get('/search/tag/{tag}', 'BlogController@searchTag');
  //article
  Route::get('/post/{slug}', 'BlogController@post');

/*----------------------------------------------------------------------------
| Auth
|---------------------------------------------------------------------------*/
Route::group(['middleware' => 'auth'], function () {
  /*--------------------------------------------------------------------------
  | backend
  |-------------------------------------------------------------------------*/
    //index
    Route::get('/admin', 'PostController@main');
    //test
    Route::get('/admin/test', 'PostController@test');
    //logout
    Route::get('/admin/logout', '\App\Http\Controllers\Auth\LoginController@logout');
  /*--------------------------------------------------------------------------
  | posts
  |-------------------------------------------------------------------------*/
    //posts-list
    Route::get('/admin/posts', 'PostController@main');
    //posts-create
    Route::get('/admin/posts/create', 'PostController@create');
    //posts-edit
    Route::get('/admin/posts/edit/{id}', 'PostController@edit');
    //posts-store
    Route::post('/admin/posts/store', 'PostController@store');
    //posts-delete
    Route::get('/admin/posts/delete/{id}', 'PostController@delete');
    //posts-addTag
    Route::post('admin/post/addTag', 'PostController@addTag');

  /*--------------------------------------------------------------------------
  | Categories
  |-------------------------------------------------------------------------*/

  /*--------------------------------------------------------------------------
  | Menus
  |-------------------------------------------------------------------------*/

  /*--------------------------------------------------------------------------
  | Settings
  |-------------------------------------------------------------------------*/
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
