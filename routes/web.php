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

Route::post('/cases/case-one', 'CaseOneController@store')
  ->middleware(['auth', 'candidate.exists']);

Route::get('/cases/case-one/answer', 'CaseOneController@getCase1Answer')
  ->middleware(['auth', 'candidate.exists']);

Route::post('/cases/case-two/image', 'CaseTwoController@image')
  ->middleware(['auth', 'candidate.exists']);

Route::post('/cases/case-two/table', 'CaseTwoController@table')
  ->middleware(['auth', 'candidate.exists']);

Route::get('/cases/case-two/table', 'CaseTwoController@getTableData')
  ->middleware(['auth', 'candidate.exists']);

Route::post('/cases/case-two/exercise-one', 'CaseTwoController@storeExerciseOneAnswer')
  ->middleware(['auth', 'candidate.exists']);

Route::get('/cases/case-two/exercise-one/answer', 'CaseTwoController@getExerciseOneAnswer')
  ->middleware(['auth', 'candidate.exists']);

Route::post('/cases/case-two/exercise-two', 'CaseTwoController@storeExerciseTwoAnswer')
  ->middleware(['auth', 'candidate.exists']);

Route::get('/cases/case-two/exercise-two/answer', 'CaseTwoController@getExerciseTwoAnswer')
  ->middleware(['auth', 'candidate.exists']);

Route::post('/submit-name', 'SubmitNameController@store')
  ->middleware(['auth', 'candidate.empty']);

Route::get('/cases/confirm', function() {
  return view('cases.confirm');
})->middleware(['auth', 'candidate.exists']);

Route::post('/cases/submit-all', 'SubmitAllController@store')
  ->middleware(['auth', 'candidate.exists']);
