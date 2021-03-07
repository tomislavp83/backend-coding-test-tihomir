<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CasinoController;

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
    $casinos = \App\Models\Casino::with('faqs')->get();
    return view('pages.home')->withCasinos($casinos);
});

Route::resource('casinos', CasinoController::class)->names([
    'edit' => 'casinos.edit',
    'create' => 'casinos.create'
]);
