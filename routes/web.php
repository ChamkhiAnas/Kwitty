<?php

use App\Article;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {

    // $article= App\Article::take(2)->get(); //Taking just two last articles
    // $article= App\Article::paginate(2); //Taking just two last articles
    // $article= App\Article::latest(2)->get(); //Taking just two last articles by created at date


     $articles= App\Article::all();



    return view('about', [
        'articles' => $articles
    ]);
});


Route::get('/articles', "ArticlesController@index");
Route::post('/articles', "ArticlesController@store");
Route::get('/articles/create', "ArticlesController@create");
Route::get('/articles/{article}', "ArticlesController@show");
Route::get('/articles/{article}/edit', "ArticlesController@edit");
Route::put('/articles/{article}', "ArticlesController@update");



Route::resource('/posts',"PostsController");


