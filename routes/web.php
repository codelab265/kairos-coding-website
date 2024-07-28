<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Service;
use App\Livewire\ServiceDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/contact', Contact::class);
Route::get('/about-us', About::class);
Route::get('/services', Service::class);
Route::get('/service/{service}', ServiceDetail::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
