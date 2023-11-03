<?php

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

Route::get('', function () {
    return view('LandingPage');
});

Route::get('/LandingPage', function () {
    return view('LandingPage');
})->name('LandingPage');
Route::get('/Chat', function () {
    return view('Chat');
})->name('Chat');
Route::get('/Order', function () {
    return view('Order');
})->name('Order');
Route::get('/Promo', function () {
    return view('Promo');
})->name('Promo');

// Route::get('/Landing', function () {
//     return view('Landing');
// })->name('Landing');
// Route::get('/Landing2', function () {
//     return view('Landing2');
// })->name('Landing2');
// Route::get('/Chat', function () {
//     return view('Chat');
// })->name('Chat');




