<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostumAuthController;

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

Route::get('/login', [CostumAuthController::class, 'login']);
Route::get('/registration', [CostumAuthController::class, 'registration']);
Route::post('/register-user', [CostumAuthController::class, 'registerUser'])->name('register-user');
