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
// Route::get('/contact','TestController@contact');
// Route::get('/', function () {
//     $users = DB::table('categories')->select('name_cat')->get();
//     return view('VIEW-NAME-HERE', compact('categories'));
// });





Route::get('/', function () {
    return view('welcome');
});
Route::get('city', function () {
    return view('city');
});
Route::get('category', function () {
    return view('category');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('service', function () {
    return view('service');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category','CategoryController@index')->name('category');
Route::get('/city','CityController@index')->name('city');

// lllllllll
Route::get('/offers','OfferController@index');
Route::get('/offers/create','OfferController@create');
Route::post('/offersaction','OfferController@storeOffer');
Route::get('offers/post/{id}', 'OfferController@show');
// llllllllllll



