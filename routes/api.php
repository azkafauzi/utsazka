<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/surahs', [\App\Http\Controllers\Wrapper::class, 'surahs'])->name('surahs')-> middleware('npm');

Route::get('/surahs/112', [\App\Http\Controllers\Wrapper::class, 'search_surahs'])->name('search_surahs')->middleware('npm');

Route::get('/surahs/112/ayahs', [\App\Http\Controllers\Wrapper::class, 'ayahs'])->name('ayahs')->middleware('npm');

Route::get('surahs/112/ayahs/2', [\App\Http\Controllers\Wrapper::class, 'search_ayahs'])->name('search_ayahs')->middleware('npm');

Route::get('/random', [\App\Http\Controllers\Wrapper::class, 'random'])->name('random')->middleware('npm');

Route::get('/user/identitas', function() {
    return [
    'code' => '0',
    'data' => [
        'npm' => '197006057',
        'name' => 'Azka Fauzi Al Parisi',
        'email' => '197006057@student.unsil.ac.id'
    ]
    ];
})->middleware('npm');