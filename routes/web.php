<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/Dashboard', function () {
    $waktuSaatIni = Carbon::now();
    $formattedTime = $waktuSaatIni->isoFormat('MMM D, YYYY | ddd, h:mm A');
    return view('dashboard', ['formattedTime' => $formattedTime]);
});

Route::get('/BookList', [BookController::class, 'index']);
Route::get('/MemberList', [MemberController::class, 'index']);