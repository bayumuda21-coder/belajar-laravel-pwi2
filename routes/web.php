
<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'  => 'Bayu Muda Herlambang',
        'kelas' => '49-04',
        'nim'   => '707082400072',
    ]);
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Routing Produk sesuai petunjuk Modul 11
Route::get('/product', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/addProduct', [ProductController::class, 'addProduct'])->name('products.create');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Routing Resource Kategori
Route::resource('/category', CategoryController::class);