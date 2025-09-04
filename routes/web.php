<?php

use App\Http\Services\Systems\Tool\Autoloader;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Autoloader::loadFilesRecursivelyInDirs([__DIR__ . '/web/']);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
