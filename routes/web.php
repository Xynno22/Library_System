<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/MemberList', [MemberController::class, 'index']);
Route::get('/addMember',[MemberController::class, 'AddDataMember']);
Route::post('/Member', [MemberController::class, 'store']);
Route::get('/editMember/{id}', [MemberController::class, 'edit']);
Route::put('/Member/{id}', [MemberController::class, 'update']);

Route::get('/Detail/{id}', [BookController::class, 'BookDetail']); 
Route::get('/BookList',[BookController::class, 'index']);
Route::get('/', [DashboardController::class, 'index']);