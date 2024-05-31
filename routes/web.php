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
    return view('login');
})->name('lp');
Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/loginn', function () {
    return view('login');
})->name('loginn');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/land', function () {
    return view('land');
})->name('land');

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


Route::get('/firebase-config', function () {
    return response()->json([
        'apiKey' => config('firebase.api_key'),
        'authDomain' => config('firebase.auth_domain'),
        'databaseURL' => config('firebase.database_url'),
        'projectId' => config('firebase.project_id'),
        'storageBucket' => config('firebase.storage_bucket'),
        'messagingSenderId' => config('firebase.messaging_sender_id'),
        'appId' => config('firebase.app_id'),
        'measurementId' => config('firebase.measurement_id'),
    ]);
});
