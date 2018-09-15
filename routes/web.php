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

/*
Route::get('/', function () {
    return view('welcome');

});
*/

Route::get('/', 'PagesController@itemSale');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('adminPanel', 'adminPanelController@adminPanel');
Auth::routes();

Route::get('/itemSale', 'PagesController@itemSale');

Route::get('/itemsCRUD', 'ItemsController@itemsCRUD');

Route::get('/sales', 'PagesController@sales');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/welcome', 'LoginController@logout');

Route::resource('items', 'ItemsController');
Route::resource('inventories', 'InventoryController');
Auth::routes();

Route::resource('employees', 'EmployeesController');

Route::resource('centres', 'CentresController');

Route::resource('sales', 'SalesController');

Route::resource('offers', 'OffersController');

Route::resource('stocks', 'StocksController');

Route::get('/export_excel/excel', 'ItemsController@excel')->name('export_excel.excel');






