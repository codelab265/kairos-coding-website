<?php

use App\Livewire\About;
use App\Livewire\Blog;
use App\Livewire\BlogDetail;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Service;
use App\Livewire\ServiceDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/contact', Contact::class)->name('contact-us');
Route::get('/about-us', About::class)->name('about-us');
Route::get('/services', Service::class)->name('services');
Route::get('/service/{service}', ServiceDetail::class)->name('service-detail');
Route::get('blogs', Blog::class)->name('blogs');
Route::get('/post/{post}', BlogDetail::class)->name('blog-detail');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
