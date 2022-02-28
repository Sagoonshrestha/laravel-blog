<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Formcontroller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostsController;

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
    return view('welcome');
});

Route::get('/home', [PageController::class, 'index'])->middleware(['auth'])->name('home');
Route::get('/contactus',function(){
    return view('contactus');
})->middleware(['auth'])->name('contactus');
Route::post('/contactus/insert',[Formcontroller::class,'store'])->middleware(['auth'])->name('contactus.insert');
Route::get('/crud',[Formcontroller::class,'index'])->middleware(['auth'])->name('crud');
Route::get('/crud/delete/{id}',[Formcontroller::class,'destroy'])->middleware(['auth'])->name('crud.delete');
Route::get('/crud/edit/{id}',[Formcontroller::class,'edit'])->middleware(['auth'])->name('crud.edit');
Route::post('/crud/update/{id}',[Formcontroller::class, 'update'])->middleware(['auth'])->name('crud.update');
Route::resource('/blog',PostsController::class);
require __DIR__.'/auth.php';
