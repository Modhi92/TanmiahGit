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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
// Employee //
    Route::get('AllEmployee', 'EmployeeController@index');
    Route::get('AddEmployee', 'EmployeeController@create');
    Route::Post('insertNewEmployee','EmployeeController@insert');
    Route::get('EmployeeEdit/{id}', 'EmployeeController@edit');
    Route::Post('EmployeeUpdate/{id}', 'EmployeeController@update');
// actives  //
    Route::get('AddActives', 'ActivesController@create');
    Route::Post('insertAddActives','ActivesController@insert');
    Route::get('viewActive', 'ActivesController@index');
    Route::get('ActiveEdit/{id}', 'ActivesController@edit');
    Route::Post('ActiveUpdate/{id}', 'ActivesController@update');
    Route::Post('ActiveDestroy', 'ActivesController@Destroy');

    //school
    Route::get('createSchool', 'SchoolController@create');
    Route::Post('insertSchool','SchoolController@insert');
    Route::get('viewSchool', 'SchoolController@index');
    Route::get('editSchool/{id}', 'SchoolController@edit');
    Route::Post('UpdateSchool/{id}', 'SchoolController@update');
    Route::Post('delete/school/{id}', 'SchoolController@Destroy');

    //Ads
    Route::get('createAdvert', 'AdvertController@create');
    Route::Post('insertAdvert','AdvertController@insert');
    Route::get('viewAdvert', 'AdvertController@view');
    Route::get('editAdvert/{id}', 'AdvertController@edit');
    Route::Post('UpdateAdvert/{id}', 'AdvertController@update');
    Route::Post('delete/Advert/{id}', 'AdvertController@Destroy');


});



