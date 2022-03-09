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
// check admin
Route::get('/admin','CheckController@index')->name('admin.index');
Route::post('/admin/checkout','CheckController@checkout')->name('admin.checkout');
//dang ky
Route::get('/register','CheckController@register')->name('register');
Route::post('/register/add-register/','CheckController@PostRegister')->name('register.post');
//logout
Route::get('admin/logout','CheckController@logout')->name('logout');



Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => 'check'], function(){

    Route::resource('/user','UserController');
    Route::resource('/category','CategoryController');
    Route::resource('/subcategory','SubCategoryController');
    Route::resource('/post','PostController');


});

//Frontend
//trang chủ
Route::get('/trang-chu','FrontEndController@TrangChu')->name('trangchu');
Route::get('/trang-chu/chi-tiet/{id}','FrontEndController@chitiet')->name('details_post');
//veLTC
Route::get('/Ve-LTC','FrontEndController@Ve_LTC')->name('Ve-LTC');
//Tin tức
Route::get('/tin-tuc','FrontEndController@TinTuc')->name('tintuc');
Route::get('/tin-tuc/loại-tin/{id}','FrontEndController@show_subcategory')->name('lt_bv');

//kien thuc
Route::get('/kien-thuc','FrontEndController@KienThuc')->name('kienthuc');
//Route::get('/kien-thuc/loại-tin/{id}','KienThucController@KienThuc')->name('KT_KienThuc');
Route::get('/kien-thuc/loại-tin/{id}','KienThucController@show_kienthuc')->name('KT');
Route::post('/xem-them','KienThucController@load_kienthuc')->name('load_kienthuc');

//noi bat
Route::get('/noi-bat','FrontEndController@NoiBat')->name('noibat');
//Route::get('/noi-bat/xem-them','FrontEndController@loadPost')->name('load');

//Route::get('index','TestController@index')->name('index');
Route::post('load_more_data','KienThucController@load_more')->name('load_more_data');

//OTC
Route::get('/OTC','FrontEndController@OTC')->name('OTC');
Route::get('/tim-kiem','FrontEndController@timkiem')->name('timkiem');
