<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardProductController;
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


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home', [
            'title' => 'Home Page'
        ]);

        Route::get('/menu', function () {
            return view('menu', [
                'title' => 'Menu Page'
            ]);
        });

        Route::resource('/admin/dashboard', DashboardProductController::class);
    });
});


// Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'regi
sterPost'])->name('registerPost');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
