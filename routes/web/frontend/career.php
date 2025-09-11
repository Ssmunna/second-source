<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/career', function () {
    return Inertia::render('frontend/career/Page');
})->name('career');

