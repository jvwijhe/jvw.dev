<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;

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


Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('/contact', [PageController::class, 'contact'])->name('pages.contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('blog', [BlogController::class, 'index'])->name('blogs.index');
Route::get('blog/{blog}', [BlogController::class, 'show'])->name('blogs.show');

require __DIR__.'/auth.php';
