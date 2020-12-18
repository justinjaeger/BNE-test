<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\MailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignUpController;

// Route::redirect('/', '/signup');
// Route::get('/signup', [SignUpController::class, 'index']);
// Route::post('/signup', [SignUpController::class, 'createUser']);

// Route::get('/home', [HomeController::class, 'index']);

Route::get('/sendMail', [MailController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// this links all the routes in /auth
require __DIR__.'/auth.php';
