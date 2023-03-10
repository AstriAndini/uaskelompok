<?php

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

//Route::get('student/index','StudentController@index');

Route::resource('doctors', 'DoctorsController');
Route::resource('patients', 'PatientsController');
Route::resource('polyclinics', 'PolyclinicsController');
Route::get('/anggota', function () {
    return view('anggota');
});
