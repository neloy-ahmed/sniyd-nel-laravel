<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
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

Route::get('user/create', [ FormController::class, 'create' ]);

Route::post('user/create', [ FormController::class, 'store' ]);

Route::get('/send-data', function () {
    $records = ["Hello Everyone"];
    return view('home', compact('records'));
});