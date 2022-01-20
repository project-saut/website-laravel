<?php

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
Route::group(['middleware'=>['XSS']],function(){
    Route::get('/', function () {
        return view('Frontend/index');
    });
    Route::get('/blog', function () {
        return view('Frontend/blog');
    });
    Route::get('/about', function () {
        return view('Frontend/about');
    });
    Route::get('/projects', function() {
        return view('Frontend/projects');
    });
});
Route::get('/uji', function() {
    return view('Backend/Home/Post');
});
Route::prefix('Homepage/adminku')->group(function (){
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Auth::routes();
});



