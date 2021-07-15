<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\healthController;
use App\http\Controllers\studentController;


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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/student', function () {
    return view('index');
});*/
Route::get('/',[studentController::class,'index'])->name('student.index');
Route::get('/create',[studentController::class,'create'])->name('student.create');
Route::post('/store',[studentController::class,'store'])->name('student.store');
Route::get('/delete/{id}',[studentController::class,'destroy'])->name('student.delete');
Route::get('/edit/{id}',[studentController::class,'edit'])->name('student.edit');
Route::post('/update/{id}',[studentController::class, 'update'])->name('student.update');



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
