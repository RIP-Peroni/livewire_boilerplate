<?php

use App\Http\Livewire\Home;
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

// Route::get('/', function () {
//     return "<h1>Hello, World!</h1>";
// });

Route::get('/', Home::class)->name('home');

// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/login', Login::class)->name('login');
//     Route::get('/register', Register::class)->name('register');
// });
