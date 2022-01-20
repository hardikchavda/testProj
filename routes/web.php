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

Route::get('/', 'homecontroller@home')->name('home');
Route::get('/about', 'homecontroller@about')->name('about');

Route::get('/login', 'adminController@login')->name('login');
Route::get('/logout', 'adminController@logout')->name('logout');
Route::post('/loginUser', 'adminController@loginUser')->name('loginUser');
Route::post('/saveUserAdmin', 'adminController@saveUserAdmin')->name('saveUserAdmin');
Route::get('/register', 'adminController@register')->name('register');



Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', 'adminController@index')->name('adminHome');

        Route::get('/addUser', 'adminController@addUser')->name('addUser');
        Route::post('/saveUser', 'adminController@saveUser')->name('saveUser');

        Route::get('/editUser/{id}', 'adminController@editUser')->name('editUser');
        Route::post('/saveeditUser/{id}', 'adminController@saveeditUser')->name('saveeditUser');
        Route::get('/deleteUser/{id}', 'adminController@deleteUser')->name('deleteUser');

    });
});


// Route::get('/test/{name}/{rno?}', function ($name, $rno = 0) {
//     return "Hello World $name  and my Roll Number is $rno";
// })->where('rno', '[0-9]+');


// Route::get('/admin', function () {
//     return view('admin/index');
// });

// Route::get('/index', 'homecontroller@index');
// Route::get('/data/{name}/{rno}', 'homecontroller@getAllData');
