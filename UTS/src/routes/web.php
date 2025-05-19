<?php

use App\Livewire\HomePage;
use App\Livewire\AboutPage;
use App\Livewire\MorePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/about', AboutPage::class)->name('about');
Route::get('/more', MorePage::class)->name('more');
