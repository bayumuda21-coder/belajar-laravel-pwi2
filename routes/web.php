
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/home', function () {
    $nim = '707082400072';

    return 'Selamat Pagi Dunia, ' . $nim;
});
