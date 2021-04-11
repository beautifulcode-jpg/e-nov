<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticleController;
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
Route::view('/', 'welcome');

Route::get('/blog',[BlogController::Class,'showFeaturedArticles']);
Route::get('/blog/article/ajouter-article',[BlogController::Class,'addArticle'])->middleware('auth:writer');
Route::post('/blog/article/ajouter-article',[BlogController::Class,'createArticle'])->middleware('auth:writer');
Route::get('/blog/article/{id}/edit',[BlogController::Class,'editArticle'])->middleware('auth:writer');
Route::post('/blog/article/{id}/edit',[BlogController::Class,'storeArticle'])->middleware('auth:writer');
Route::get('/blog/article/{id}/delete',[BlogController::Class,'deleteArticle'])->middleware('auth:admin');

Route::get('/blog/article/{id}',[BlogController::Class,'showArticle']);
Route::post('/blog/article/{id}/comment',[ArticleController::Class,'addComment']);
Route::get('/blog/{category}',[BlogController::Class,'showArticles']);

Auth::routes();

Route::get('/login/admin', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm');
Route::get('/login/writer', 'App\Http\Controllers\Auth\LoginController@showwriterLoginForm');
Route::get('/register/admin', 'App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/writer', 'App\Http\Controllers\Auth\RegisterController@showWriterRegisterForm');

Route::post('/login/admin', 'App\Http\Controllers\Auth\LoginController@adminLogin');
Route::post('/login/writer', 'App\Http\Controllers\Auth\LoginController@writerLogin');
Route::post('/register/admin', 'App\Http\Controllers\Auth\RegisterController@createAdmin');
Route::post('/register/writer', 'App\Http\Controllers\Auth\RegisterController@createwriter');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::view('/admin', 'admin')->middleware('auth:admin');
Route::view('/writer', 'writer')->middleware('auth:writer');