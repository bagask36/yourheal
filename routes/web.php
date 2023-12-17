<?php

use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\DasboardController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ArticleController as FrontArticleController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PostController;
use App\Http\Controllers\Front\PostDetailController;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class, 'index']);

    Route::middleware('auth')->group(function(){
        Route::get('/dashboard', [DasboardController::class, 'index']);

        Route::resource('/articles', ArticleController::class);

        Route::resource('/categories', CategoryController::class)->only([
            'index', 'store', 'update', 'destroy'
        ]);

        Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });        
        });        

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/{id}', [PostDetailController::class, 'show'])->name('post.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

