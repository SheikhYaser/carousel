<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\Plan;
use App\Models\Post;
use App\Models\Price;
use App\Models\PricePlan;
use App\Models\Product;
use App\Models\Slader;
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
    $sladers = Slader::all();
    $posts = Post::all();
    $blogs = Blog::all();
    return view('index', compact('sladers' , 'posts' , 'blogs'));
});
    //    BlogController

Route::get('/create', [BlogController::class, 'create'])->name('create');
Route::post('/create', [BlogController::class, 'store'])->name('store');

    //    BlogController

    Route::get('/price', function () {
        $prices = Price::all();
        $plans = Plan::all();
     return view('price.index', compact('prices', 'plans'));
    });
