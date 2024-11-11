<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SnackController;
use App\Http\Controllers\LainnyaController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\DashboardProductController;


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
    });

    Route::get('/transaction', function () {
        return view('transaction', [
            'title' => 'Transaction Page'
        ]);
    });

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit/{user:id}', [ProfileController::class, 'edit'])->name('profileEdit');
    Route::put('/profile/edit', [ProfileController::class, 'update'])->name('profileUpdate');
    // Forgot Password
    Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'verify'])->name('forgot-password.email');

    Route::get('/forgot-password/{user}', [ForgotPasswordController::class, 'edit'])->name('edit-password');

    // Category
    Route::get('/category/makanan', [MakananController::class, 'index']);
    Route::get('/category/makanan/{id}', [MakananController::class, 'show']);
    Route::get('/category/minuman', [MinumanController::class, 'index']);
    Route::get('/category/snack', [SnackController::class, 'index']);
    Route::get('/category/lainnya', [LainnyaController::class, 'index']);
});








// Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/auth', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/auth', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
