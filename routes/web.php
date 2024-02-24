<?php

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

// routes/web.php

use App\Http\Controllers\RateController;

// Route::middleware(['ip.rate.limit'])->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     });

//     Route::get('/start-session', [RateController::class, 'startSession']);
//     Route::post('/close-previous-session', [RateController::class, 'closePreviousSession']);
// });

// Add this route to your routes file (web.php or api.php)

