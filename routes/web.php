<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/forum2', function () {
    return view('forum2');
});

Route::get('/regist', function () {
    return view('regist');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/diet', function () {
    return view('diet');
});

Route::get('/akun', function () {
    return view('akun');
});

// Route::get('/output', function () {
//     return view('output');
// });

Route::get('/food', [FoodController::class, 'index']);
// Route::post('/hitungkalori', [FoodController::class, 'calculateCalories']);
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.submit');

// Route::get('/login', [UserController::class, 'showLoginForm']);
// Route::post('/login', [UserController::class, 'login']);
Route::get('/calculate', [UserController::class, 'showCalculate']);

Route::get('/hitungkalori', [FoodController::class, 'index']);
Route::post('/hitungkalori', [FoodController::class, 'calculateCalories']);
Route::get('/output', function () {
    return view('output');
});
