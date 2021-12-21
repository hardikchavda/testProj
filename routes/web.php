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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});
Route::get('/DEF', function () {
    return view('about');
})->name('about');
Route::prefix('admin')->group(function () {
    // Route::get('/users', function () {
    //     return view('about');
    // });
    // Route::get('/login', function () {
    //     return view('about');
    // });
    // Route::get('/logout', function () {
    //     return view('about');
    // });
});


// Route::get('/test/{name}/{rno?}', function ($name, $rno = 0) {
//     return "Hello World $name  and my Roll Number is $rno";
// })->where('rno', '[0-9]+');


// Route::get('/admin', function () {
//     return view('admin/index');
// });

// Route::get('/index', 'homecontroller@index');
// Route::get('/data/{name}/{rno}', 'homecontroller@getAllData');