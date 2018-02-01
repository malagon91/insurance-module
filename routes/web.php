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

//Route::get('/', 'MainController@home');

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();

Route::resource('cars','CarsController');
// model, controller
Route::resource('customers','CustomersController');

/*
 * GET /customers => index
 * POST /customers => store
 * GET /customers/create => form to build a new customer
 * GET /customers/:id => Show product by Id
 * GET /customers/:id/edit =>  edition form
 * PUT/PATCH /customers/:id =>  Save editing product
 * DELETE /customers/:id =>  remove customer
 */

Route::get('/home', 'HomeController@index')->name('home');
