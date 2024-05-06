<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MeetingsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TherapistController;


use function Pest\Laravel\get;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Therapist Api 
Route::post('/therapists/register', [TherapistController::class, 'register']);
Route::post('/therapists/update/{id}', [TherapistController::class, 'updateProfile']);
Route::delete('/therapists/{id}', [TherapistController::class, 'delete']);
Route::get('/therapists/search', [TherapistController::class, 'search']);
Route::get('/therapists/show/{id}', [TherapistController::class, 'show']);

Route::post('/therapists/updatePassword/{id}', [TherapistController::class, 'updatePassword']);


//Meeetings api 
Route::post('/meeting/schedule', [MeetingsController::class, 'scheduleAppointment']);
Route::post('/meeting/show/{id}', [MeetingsController::class, 'show']);
Route::post('/meeting/update/{id}', [MeetingsController::class, 'update']);
Route::get('/meeting/cancel/{id}', [MeetingsController::class, 'cancel']);
Route::get('/meeting/RetrieveTherapist/{id}', [MeetingsController::class, 'meetingsForTherapist']);
Route::get('/meeting/RetrieveClient/{id}', [MeetingsController::class, 'meetingsForClient']);
Route::get('/meeting/allmeetings', [MeetingsController::class, 'index']);
Route::post('/meeting/delete/{id}', [MeetingsController::class, 'destroy']);
Route::get('/meeting/checkAvailability', [MeetingsController::class, 'checkAvailability']);








//client api 

Route::post('/client/register', [ClientController::class, 'register']);