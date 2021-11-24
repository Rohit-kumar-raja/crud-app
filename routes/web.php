<?php

use App\Http\Controllers\crudcontroller;
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

Route::get('add', function () {
    return view('index');
})->name('add');

Route::post('add',[crudcontroller::class,'store']);
Route::get('/', [crudcontroller::class,'index'] )->name('home');
Route::get('delete/{id}',[crudcontroller::class,'destroy']);
Route::get('update/{id}', [crudcontroller::class,'edit'] );
Route::post('update',[crudcontroller::class,'update']);