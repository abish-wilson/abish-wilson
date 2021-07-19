<?php

use App\Http\Controllers\DailyDepositsController;
use App\Http\Controllers\FixeddepositController;
use App\Http\Controllers\GoldLoanController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MISController;
use App\Http\Controllers\RecurringDepositController;
use App\Http\Controllers\SavingAccountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeeklyDepositController;
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

Route::post('/login', [UserController::class, "login"]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//deposit_details

Route::middleware(['auth:sanctum'])->group(function () {


    Route::get('/deposit/dailydeposit', [DailyDepositsController::class, "dailydepositapi"]);
    Route::get('/deposit/dailydeposit/{id}', [DailyDepositsController::class, "dailydepositentryapi"]);

    Route::get('/deposit/fixeddeposit', [FixeddepositController::class, "fixeddepositapi"]);
    Route::get('/deposit/fixeddeposit/{id}', [FixeddepositController::class, "fixeddepositentryapi"]);

    Route::get('/deposit/recurringdeposit', [RecurringDepositController::class, "recurringdepositapi"]);
    Route::get('/deposit/recurringdeposit/{id}', [RecurringDepositController::class, "recurringdepositentryapi"]);

    Route::get('/deposit/weeklydeposit', [WeeklyDepositController::class, "weeklydepositapi"]);
    Route::get('/deposit/weeklydeposit/{id}', [WeeklyDepositController::class, "weeklydepositentryapi"]);

    Route::get('/deposit/savingaccount', [SavingAccountController::class, "savingAcctapi"]);
    Route::get('/deposit/savingaccount/{id}', [SavingAccountController::class, "savingstransactions"]);

    Route::get('/deposit/loan', [LoanController::class, "loanapi"]);
    Route::get('/deposit/loan/{id}', [LoanController::class, "loanentryapi"]);

    Route::get('/deposit/misloan', [MISController::class, "mis_api"]);
    Route::get('/deposit/misloan/{id}', [MISController::class, "mis_loan_entryapi"]);

    Route::get('/deposit/goldloan', [GoldLoanController::class, "gold_loan_api"]);
    Route::get('/deposit/goldloan/{id}', [GoldLoanController::class, "goldloanentryapi"]);
});
