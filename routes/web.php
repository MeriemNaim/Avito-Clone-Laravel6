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

Route::get('/admin','AdminController@index');
// admin users routes
Route::get('/admin/aduser/users','AdminController@test');
Route::get('/admin/aduser/deleteuser/{id}','AdminController@dltuser');
Route::get('/admin/aduser/apuser/{id}','AdminController@upuser');
// admin offers routes
Route::get('/admin/adoffer/offer','AdminController@adf');
Route::get('/admin/adoffer/editoffer','AdminController@editoffer');
Route::get('/admin/adoffer/editoffer/{id}','AdminController@editoffer');
Route::get('/admin/adoffer/deleteoffer/{id}','AdminController@dltoffer');
Route::get('/admin/adoffer/apoffer/{id}','AdminController@apoffer');
Route::get('/admin/adcity/city','AdminController@adcity');
Route::get('/admin/adcatgory/cat','AdminController@adcat');
// filtered
Route::get('/filterby/bycat/{id}','CategoryController@bycat');
Route::get('/filterby/bycity/{id}','CityController@bycity');


Route::get('/admin/aduser/roleuser', function () {
    return view('admin.aduser.roleuser');
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
Route::get('/', 'HomeController@index')->name('home');

// search
Route::any('/search', 'HomeController@search');
Route::get('searchR', function () {
    return view('searchR');
});

Route::get('/category','CategoryController@index')->name('category');
Route::get('/city','CityController@index')->name('city');

// lllllllll
Route::get('/offers','OfferController@index');
Route::get('/offers/create','OfferController@create');
Route::post('/offersaction','OfferController@storeOffer');
Route::get('offers/post/{id}', 'OfferController@show');
// llllllllllll



