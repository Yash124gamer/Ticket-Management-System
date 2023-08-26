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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-ticket', [App\Http\Controllers\TicketController::class,'store'])->name('submit.ticket');

Route::get('/show-ticket',function(){
    return view('show-ticket');
})->name('ticket.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/update-ticket/{id}', [App\Http\Controllers\TicketController::class, 'update'])->name('update.ticket');
