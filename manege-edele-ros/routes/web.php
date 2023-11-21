<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PaardenController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MededelingController;
use App\Http\Controllers\InschrijvingController;
use App\Models\Comment;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('overview');
});

Route::get('/formblueprint', function () {
    return view('formblueprint');
});

Route::get('/inschrijfformulier', function () {
    return view('inschrijfformulier');
})->name('inschrijfformulier');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('agenda', AgendaController::class);
Route::resource('paarden', PaardenController::class);
Route::resource('comment', CommentController::class);
Route::resource('mededeling', MededelingController::class);

Route::get('/inschrijvingen', [App\Http\Controllers\InschrijvingController::class, 'index'])->name('inschrijvingen');
Route::resource('inschrijvingen', InschrijvingController::class);