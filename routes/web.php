<?php

use App\Models\News;
use App\Models\Umkm;
use App\Models\User;
use App\Models\Event;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('parts.index', [
        'title' => 'Home',
        'event'=> Event::latest()->limit(3)->get(),
        'news' => News::latest()->limit(2)->get()
    ]);
});
Route::get('/event', function () {
    return view('parts.event', [
        'title' => 'Event',
        'event'=> Event::latest()->get()
    ]); 
});


Route::get('/e-data', function () {
    return view('parts.e-data', [
        "title" => "E-data"
    ]);
});

Route::get('/e-data/population', function () {
    return view('parts.e-data.population', [
        "title" => "E-data"
    ]);
});
Route::get('/e-data/galeri', function () {
    return view('parts.e-data.galeri', [
        "title" => "E-data"
    ]);
});
Route::get('/e-data/arsip', function () {
    return view('parts.e-data.arsip', [
        "title" => "E-data"
    ]);
});

Route::get('/oleh-oleh', [UmkmController::class, 'front']);
Route::get('/news', function () {
    return view('parts.products', [
        "title" => "News"
    ]);
});
Route::get('/product/{user:username}', function (User $user) {
    return view('parts.products', [
        "title" => "Oleh-oleh",
        "products" => $user->product

    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');


Route::resource('/dashboard/event/', EventController::class)->middleware('auth');
Route::delete('dashboard/event/{event:slug}', [EventController::class, 'destroy'])->name('events.destroy');
Route::get('dashboard/event/{event:slug}/edit', [EventController::class, 'edit']);
Route::put('dashboard/event/{event:slug}', [EventController::class, 'update']);
Route::resource('dashboard/news', NewsController::class)->middleware('auth');
Route::put('dashboard/news/{news:slug}', [NewsController::class, 'update']);
Route::resource('dashboard/umkm', UmkmController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post ('/logout', [LoginController::class, 'logout']);


Route::resource('/dashboard/product', ProductController::class)->middleware('auth');


