<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\RegisterForm;



Route::get('/register', RegisterForm::class)->name('register');

Route::get('/', function () {
    return view('index');
})->name('home');
