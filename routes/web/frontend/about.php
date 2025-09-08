<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/about', function () {
    return Inertia::render('frontend/about/Page');
})->name('about');

