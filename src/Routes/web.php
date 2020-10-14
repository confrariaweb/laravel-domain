<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')
    ->name('dashboard.')
    ->middleware(['web', 'auth'])
    ->namespace('ConfrariaWeb\Domain\Controllers')
    ->group(function () {
        Route::prefix('domains')
            ->name('domains.')
            ->group(function () {
                Route::get('datatable', 'DomainController@datatables')->name('datatables');
            });
        Route::resource('domains', 'DomainController');
    });
