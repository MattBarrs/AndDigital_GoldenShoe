<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {return view('welcome');})->middleware('auth');

Auth::routes();

Route::get('/report_problem', [ HomeController::class, 'report_problem'])->name('help.report_problem')->middleware('auth');
Route::get('/three_d_demo', [ MainController::class, 'three_d_demo'])->name('three_d_demo')->middleware('auth');
Route::get('/delivery_estimates', [ MainController::class, 'delivery_estimates'])->name('delivery_estimates')->middleware('auth');
Route::get('/return_items', [ MainController::class, 'return_items'])->name('return_items')->middleware('auth');
Route::get('/size_guide', [ MainController::class, 'size_guide'])->name('help.size_guide')->middleware('auth');

Route::get('/home', [ HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/summer_collection', [ MainController::class, 'summer_collection'])->name('summer_collection');



