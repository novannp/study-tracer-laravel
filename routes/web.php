<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AnswersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KuesionersController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\QuestionsController;
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

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerIndex']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//PRODI
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi')->middleware('auth');
Route::get('/prodi/add', [ProdiController::class, 'createIndex'])->middleware('auth');;
Route::post('/prodi/create', [ProdiController::class, 'create'])->middleware('auth');
Route::delete('/prodi/{id}', [ProdiController::class, 'delete'])->middleware('auth');
Route::get('/prodi/edit/{id}', [ProdiController::class, 'editIndex'])->middleware('auth');
Route::put('/prodi/{id}', [ProdiController::class, 'update'])->middleware('auth');

Route::get('/', function () {
    return view('home');
});


//ALUMNI
Route::get('/alumni', [AlumniController::class, 'index'])->middleware('auth');;
Route::get('/alumni/edit/{id}', [AlumniController::class, 'editIndex'])->middleware('auth');;
Route::put('/alumni/{id}', [AlumniController::class, 'update'])->middleware('auth');;


// Kuesioner
Route::resource('kuesioners', KuesionersController::class)->middleware('auth');
// Route::resource('questions', QuestionsController::class);

// PERTANYAAN
Route::resource('kuesioners.questions', QuestionsController::class)->scoped([
    'kuesioners' => 'kuesioners:id',
    'questions' => 'questions:id'
])->middleware('auth');

Route::resource('kuesioners.questions.answers', AnswersController::class);
