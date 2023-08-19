<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category/add', function(){
    return view('category');
})->name('category');

Route::get('/tags/add', function(){
    return view('tags');
})->name('tags');


Route::get('/post/add', [PostController::class, "index"])->name('posts');

Route::get('/home', [PostController::class, "insertData"]);
Route::get('/showData', [PostController::class, "showData"]);


Route::post('/category/insert', [CategoryController::class, "store"])
       ->name('category.insert');
       
Route::post('/tags/insert', [TagsController::class, "store"])
       ->name('tags.insert');
              
Route::post('/post/insert', [PostController::class, "insertData"])
->name('post.insert');

Route::get('/post/show', [PostController::class, "showPost"])
->name('posts.show');

Route::get('/category/show', [CategoryController::class, "showCategory"])
->name('category.show');
Route::get('/category/show/{id}', [CategoryController::class, "categDetail"]);

Route::get('/post/show/{id}', [PostController::class, "postDetail"]);

Route::get('/tags/show', [TagsController::class, "showTags"])
->name('tags.show');

Route::get('/tags/show/{id}', [TagsController::class, "showData"]);