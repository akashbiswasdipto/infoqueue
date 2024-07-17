<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/header', function () {
    return view('header');
});

Route::get('/login', function () {
    return view('authentication');
})->name('login');

Route::get('/signup', [FormController::class, 'showForm'])->name('new_user');
Route::post('/signup', [FormController::class, 'submitForm'])->name('form.submit');
