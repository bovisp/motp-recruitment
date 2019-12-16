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

Route::get('/home', 'HomeController@index')
  ->name('home')
  ->middleware(['auth', 'candidate.empty']);

Route::get('/cases/case-one', 'CaseOneController@show')
  ->middleware(['auth', 'candidate.exists']);

Route::get('/cases/case-two', 'CaseTwoController@show')
  ->middleware(['auth', 'candidate.exists']);

Route::post('/cases/case-two/image', 'CaseTwoController@image')
  ->middleware(['auth', 'candidate.exists']);

Route::post('/submit-name', 'SubmitNameController@store')
  ->middleware(['auth', 'candidate.empty']);

Route::get('/cases/confirm', function() {
  return view('cases.confirm');
})->middleware(['auth', 'candidate.exists']);

Route::post('/cases/submit-all', 'SubmitAllController@store')
  ->middleware(['auth', 'candidate.exists']);
