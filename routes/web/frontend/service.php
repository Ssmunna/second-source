<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/service', function () {
    return Inertia::render('frontend/service/Page');
})->name('service');

