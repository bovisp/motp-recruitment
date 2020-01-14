<?php

use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Auth routes.
 */
Auth::routes();

Route::get('/home', 'HomeController@index')
  ->name('home')
  ->middleware(['auth', 'candidate.empty']);

/**
 * Case routes.
 */
Route::middleware(['auth', 'candidate.exists'])->group(function () {
  Route::prefix('/cases/case-one')->group(function () {
    Route::get('/', 'CaseOneController@show');

    Route::post('/', 'CaseOneController@store');
  });

  Route::prefix('/cases/case-two')->group(function () {
    Route::get('/', 'CaseTwoController@show');

    Route::post('/', 'CaseTwoController@store');

    Route::post('/image', 'CaseTwoController@image');

    Route::post('/table', 'CaseTwoController@table');
  });

  Route::prefix('/cases')->group(function () {
    Route::get('/confirm', 'SubmitAllController@index');

    Route::post('/submit-all', 'SubmitAllController@store');
  });
});

Route::post('/submit-name', 'SubmitNameController@store')
  ->middleware(['auth', 'candidate.empty']);

/**
 * Answers routes.
 */
Route::middleware(['auth'])->group(function () {
  Route::prefix('/answers')->group(function () {
    Route::get('/{candidate}', 'MarkingController@show')
      ->middleware('isadmin');

    Route::get('/{candidate}/api', 'Api\AnswersController@show')
      ->middleware('iscandidate');

      Route::get('/', 'MarkingController@index');
  });
});

/**
 * Score routes.
 */
Route::middleware(['auth', 'isadmin'])->group(function () {
  Route::prefix('/scores')->group(function () {
    Route::post('/{candidate}', 'MarkingController@store');
  });
});

/**
 * Data routes
 */
Route::middleware(['auth'])->group(function () {
  Route::get('/data/animations/{file}', function ($file) {
    $path = public_path() . "/animations/${file}.json";

    if (!File::exists($path)) {
      throw new \Exception("Invalid File");
    }

    return File::get($path);
  });
});