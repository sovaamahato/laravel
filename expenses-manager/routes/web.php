<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;



Route::get('/', [ExpenseController::class, 'index'])->name('expense.home');
Route::get('/create', [ExpenseController::class, 'displayCreateForm'])->name('expense.create');
Route::get('/edit', [ExpenseController::class, 'displayEditForm'])->name('expense.edit');
Route::post('/store', [ExpenseController::class, 'store'])->name('expense.store');

