<?php

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

Route::namespace('Frontend')->group(function () {
    // Controllers Within The "App\Http\Controllers\Frontend" Namespace
    Route::get('/home', 'IndexController@index')->name('front.index');
    // Blog
    Route::get('/blog', 'BlogController@blog')->name('front.blog');
    //Contacto
    Route::get('/contacto', 'ContactoController@contacto')->name('front.contacto');
    //Portafolio
    Route::get('/portafolio', 'PortafolioController@portafolio')->name('front.portafolio');

    Route::get('/send_test_email','IndexController@send_email')->name('front.send_email');

});

Auth::routes();
