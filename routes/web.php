<?php

use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'TestController@index');

Route::get('/test/data', 'TestController@show');

Route::post('/test', 'TestController@store');

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
Route::middleware(['auth', 'candidate.exists', 'countdown'])->group(function () {
  Route::prefix('/cases/case-one')->group(function () {
    Route::get('/', 'CaseOneController@show');

    Route::post('/', 'CaseOneController@store');
  });

  Route::prefix('/cases/case-two')->group(function () {
    Route::get('/', 'CaseTwoController@show');

    Route::post('/', 'CaseTwoController@store');

    Route::post('/image', 'CaseTwoController@image');

    Route::get('/image', 'CaseTwoController@getImage');

    Route::post('/table', 'CaseTwoController@table');
  });

  Route::prefix('/cases')->group(function () {
    Route::get('/confirm', 'SubmitAllController@index');

    Route::post('/submit-all', 'SubmitAllController@store');
  });

  Route::get('/countdown', 'CountdownController@index');
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
Route::get('/data/animations/{file}', function ($file) {
  $path = public_path() . "/animations/${file}.json";

  if (!File::exists($path)) {
    throw new \Exception("Invalid File");
  }

  return File::get($path);
});
