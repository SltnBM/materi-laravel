<?php

use App\Http\Controllers\PagesController;
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
//     return view('index');
// });

// Route::get('/form', function () {
//     return view('form');
// })->name('form');

// Route::get('/welcome', function () {
//     return view('welcome');
// })->name('welcome');

Route::GET('/', [PagesController::class, 'index']);
Route::GET('/form', [PagesController::class, 'form'])->name('form');
Route::GET('/welcome', [PagesController::class, 'welcome'])->name('welcome');

// Route::get('/about', function () {
//     return view('about');
// })->name('get-about');