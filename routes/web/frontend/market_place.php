<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/market-place', function () {
    return Inertia::render('frontend/market_place/Page');
})->name('marketplace');

