<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoanController;
use App\Models\book;
use PhpParser\Node\Expr\Cast\Bool_;
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
Route::get('/Member-delete/{id}', [MemberController::class, 'delete']);
Route::delete('/Member-destroy/{id}', [MemberController::class, 'destroy']);

Route::get('/Detail/{id}', [BookController::class, 'BookDetail']); 
Route::get('/BookList',[BookController::class, 'index']);
Route::get('/addBook',[BookController::class, 'AddBook']);
Route::post('/Book',[BookController::class, 'store']);
Route::get('/editBook/{id}', [BookController::class, 'edit']);
Route::put('/Book/{id}', [BookController::class, 'update']);
Route::get('/Book-delete/{id}', [BookController::class, 'delete']);
Route::delete('/Book-destroy/{id}', [BookController::class, 'destroy']);

Route::get('/loans', [LoanController::class, 'index']);
Route::get('/addLoan',[loanController::class, 'AddDataMember']);
Route::post('/Loan', [LoanController::class, 'store']);
Route::get('/editLoan/{id}', [LoanController::class, 'edit']);
Route::put('/Loan/{id}', [LoanController::class, 'update']);
Route::get('/Loan-delete/{id}', [LoanController::class, 'delete']);
Route::delete('/Loan-destroy/{id}', [LoanController::class, 'destroy']);

Route::get('/', [DashboardController::class, 'index']);