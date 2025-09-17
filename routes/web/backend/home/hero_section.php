<?php

use App\Http\Controllers\Backend\Home\HeroSectionController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'home.', 'prefix' => 'home', 'middleware' => ['auth']], function () {
    Route::group(['as' => 'hero.', 'prefix' => 'hero'], function () {
        Route::get('/', [HeroSectionController::class, 'page'])->name('page');
        Route::post('/update', [HeroSectionController::class, 'createOrUpdate'])->name('update');
    });
});

