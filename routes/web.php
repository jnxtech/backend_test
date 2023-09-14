<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CryptocurrencyController;
use App\Http\Controllers\TransferController;

// User routes
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

// Wallet routes
Route::get('/wallets', [WalletController::class, 'index']);
Route::get('/wallets/{wallet}', [WalletController::class, 'show']);
Route::post('/wallets', [WalletController::class, 'store']);
Route::put('/wallets/{wallet}', [WalletController::class, 'update']);
Route::delete('/wallets/{wallet}', [WalletController::class, 'destroy']);

// Transaction routes
Route::get('/transactions', [TransactionController::class, 'index']);
Route::get('/transactions/{transaction}', [TransactionController::class, 'show']);
Route::post('/transactions', [TransactionController::class, 'store']);
Route::put('/transactions/{transaction}', [TransactionController::class, 'update']);
Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy']);

// Cryptocurrency routes
Route::get('/cryptocurrencies', [CryptocurrencyController::class, 'index']);
Route::get('/cryptocurrencies/{cryptocurrency}', [CryptocurrencyController::class, 'show']);
Route::post('/cryptocurrencies', [CryptocurrencyController::class, 'store']);
Route::put('/cryptocurrencies/{cryptocurrency}', [CryptocurrencyController::class, 'update']);
Route::delete('/cryptocurrencies/{cryptocurrency}', [CryptocurrencyController::class, 'destroy']);

// Transfer routes
Route::get('/transfers', [TransferController::class, 'index']);
Route::get('/transfers/{transfer}', [TransferController::class, 'show']);
Route::post('/transfers', [TransferController::class, 'store']);
Route::put('/transfers/{transfer}', [TransferController::class, 'update']);
Route::delete('/transfers/{transfer}', [TransferController::class, 'destroy']);
