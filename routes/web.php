<?php

use App\Http\Controllers\ProfileController;
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
    return view('landing');
})->name('index');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');



Route::get('/patient', function () {
    return view('index');
})->name('patient');

Route::get('/getStarted', function () {
    return view('getStarted');
})->name('getStarted');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/registerpage', function () {
    return view('registerPage');
})->name('rp');

Route::get('/loginpage', function () {
    return view('loginPage');
})->name('lp');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/api/user-id', function () {
    return auth()->user()->id;
})->middleware('auth');


require __DIR__.'/auth.php';
