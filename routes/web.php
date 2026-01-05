<?php

use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

require __DIR__.'/auth.php';

use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\CreditCardController;

Route::middleware('auth')->group(function () {

    Route::get('/bank-accounts', [BankAccountController::class, 'index'])
        ->name('bank.accounts');

    Route::get('/credit-cards', [CreditCardController::class, 'index'])
        ->name('credit.cards');

});
