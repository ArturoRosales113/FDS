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
    Route::get('/', 'IndexController@index')->name('front.index');
    // Blog
    Route::get('/carta', 'BlogController@blog')->name('front.blog');
    //Contacto
    Route::get('/contacto', 'ContactoController@contacto')->name('front.contacto');

});
Route::namespace('Backend')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::middleware(['auth'])->group(function () {
           //App Resources
           Route::get('/', 'DashboardController@index')->name('back.index');
           Route::resource('/categories'	, 'CategoryController');
           Route::resource('/dishes'		, 'DishController');
           Route::resource('/orders'		, 'OrderController');
           Route::resource('/promos'		, 'PromoController');
           Route::resource('/reservations'	, 'ReservationController');
           Route::resource('/tickets'		, 'TicketController');
           Route::resource('/users'		, 'UserController');
     });
  });
});


Auth::routes();
