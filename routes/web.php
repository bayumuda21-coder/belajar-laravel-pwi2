
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Bayu Muda Herlambang',
        'kelas' => '49-04',
        'nim' => '707082400072',
    ]);
});

Route::get('/contact', function () {
    return view('pages.contact');
});

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resource('products', ProductController::class);

use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

use App\Http\Controllers\CategoryController;

Route::resource('/category', CategoryController::class);