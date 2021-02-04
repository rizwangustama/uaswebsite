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

// Route::get('/', function () {
//     return view('page.home.homepage');
// });

// use Illuminate\Routing\Route;

Route::prefix('/')
    ->namespace('Home')
    ->group(function(){
        Route::resource('/', 'HomepageController');
        Route::get('/info', function () {
            return view('page.home.infopage');
        });

        Route::get('/signature', function () {
            return view('page.home.signaturepage');
        });
        Route::get('/social', function () {
            return view('page.home.social');
        });
        Route::get('/our', function () {
            return view('page.home.ourpage');
        });
    });


Route::prefix('home')
    ->namespace('Admin')
    ->group(function(){
        Route::resource('/', 'DashboardController');
        Route::resource('/events', 'EventsController');
        Route::resource('/hotel', 'HotelController');
        Route::resource('/project', 'ProjectsController');
    });






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
