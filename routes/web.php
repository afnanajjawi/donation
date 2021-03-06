<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationsController;


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
    return view('donate');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('donate', [DonationsController::class, 'donate'])->name('donate');
Route::post('donate',[DonationsController::class, 'donatePost'])->name('donate.store');