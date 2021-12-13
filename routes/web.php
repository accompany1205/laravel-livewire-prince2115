<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Customer;
use App\Http\Livewire\Business\Business;
use App\Http\Livewire\Business\Detail as BusinessDetail;
use App\Http\Livewire\Loans\Loans;
use App\Http\Livewire\Loans\Detail as LoanDetail;
use App\Http\Livewire\Loans\SubLoans;
use App\Http\Livewire\Loans\Sub\Detail as SubLoanDetail;
use App\Http\Livewire\Transaction\Payment;
use App\Http\Livewire\Transaction\Withdraw;
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
// Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/custromers', Customer::class)->name('customers');
Route::get('/business', Business::class)->name('business');
Route::get('/business/detail', BusinessDetail::class)->name('business.detail');
Route::get('/loans', Loans::class)->name('loans');
Route::get('/loans/{id}/detail', LoanDetail::class)->name('loans.detail');
Route::get('/loans', Loans::class)->name('loans');
Route::get('/loans/loans', SubLoans::class)->name('loans.sub');
Route::get('/loans/loans/{id}/detail', SubLoanDetail::class)->name('loans.sub.detail');
Route::get('/transactions/payment', Payment::class)->name('transaction.payment');
Route::get('/transactions/withdraw', WithDraw::class)->name('transaction.withdraw');

Route::middleware('auth')->group(function () {

});





