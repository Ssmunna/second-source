<?php

use App\Http\Controllers\Backend\Home\BrandSectionController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'home.', 'prefix' => 'home', 'middleware' => ['auth']], function () {
    Route::group(['as' => 'brand.', 'prefix' => 'brand'], function () {
        Route::get('/', [BrandSectionController::class, 'page'])->name('page');
        Route::post('/update', [BrandSectionController::class, 'createOrUpdate'])->name('update');
    });
});

