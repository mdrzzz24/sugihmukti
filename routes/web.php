<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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
    return view('user.index');
});

Route::get('/tentang', function () {
    return view('user.tentang');
});

Route::get('/wisata', function () {
    return view('user.wisata');
});

Route::get('/pertanian', function () {
    return view('user.produk.pertanian');
});

Route::get('/kesehatan', function () {
    return view('user.produk.kesehatan');
});

Route::get('/kopi', function () {
    return view('user.produk.kopi');
});

Route::get('/makanan', function () {
    return view('user.produk.makanan');
});

Route::get('/kerajinan', function () {
    return view('user.produk.kerajinan');
});

Route::get('/pesanan', function () {
    return view('user.pesanan.pesanan');
});

Route::get('/keranjang', function () {
    return view('user.pesanan.keranjang');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    // Route::get('/', [AdminController::class, 'index'] );
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/content', function () {
        return view('admin.content');
    });
    Route::get('/product', function () {
        return view('admin.product');
    });
    // Route::get('/users', function () {
    //     return view('admin.user');
    // });
    // Route::get('/news', function () {
    //     return view('admin.news');
    // });
    Route::get('/users', [AdminController::class, 'getuser']);
    Route::get('/addcontent', [AdminController::class, 'addcontent']);
    Route::get('/addaccount', [AdminController::class, 'addaccount']);
    Route::get('/news', [AdminController::class, 'showNews'])->name('admin.news');
    Route::post('/account', [AdminController::class, 'account']);
    Route::get('/addnews', [AdminController::class, 'addnews']);
    Route::post('/storenews', [AdminController::class, 'storenews']);
    Route::get('/news/edit/{id}', [AdminController::class, 'edit'])->name('news.edit');
    Route::post('/news/update/{id}', [AdminController::class, 'update'])->name('news.update');
    Route::get('/news/delete/{id}', [AdminController::class, 'destroy'])->name('news.delete');



});

