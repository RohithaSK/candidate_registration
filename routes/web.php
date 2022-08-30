<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/warning', function () {
    return view('warning_msg');
});

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('landing_page');
});

Route::get('/my_register', function () {
    return view('myregister');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/common_dashboard', 'DashboardController@index');

//candidate registration routes
Route::get('/form', 'CandidateController@display_form');
Route::post('/save', 'CandidateController@save_form');
Route::get('/list_of_candidates', 'CandidateController@show_candidates');
Route::get('/edit_data/{id}', 'CandidateController@show_edit_page');
Route::post('/update_data/{id}', 'CandidateController@update_data');
Route::delete('/delete_candidate_data/{id}', 'CandidateController@delete_data');
