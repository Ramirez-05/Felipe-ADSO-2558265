<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [NoteController::class, 'index'])->name('index');
Route::get('/create', [NoteController::class, 'create'])->name('create');
Route::post('/store', [NoteController::class, 'store'])->name('store');
Route::get('/show/{note}', [NoteController::class, 'show'])->name('show');

Route::get('/edit/{note}', [NoteController::class, 'edit'])->name('edit');
Route::put('/update/{note}', [NoteController::class, 'update'])->name('update');
Route::delete('/destroy/{note}', [NoteController::class, 'destroy'])->name('destroy');