<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('companies', CompanyController::class);

Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');
Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::get('companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
Route::put('companies/{company}', [CompanyController::class, 'update'])->name('companies.update');
Route::delete('companies/{company}', [CompanyController::class, 'destroy'])->name('companies.destroy');
Route::get('companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
