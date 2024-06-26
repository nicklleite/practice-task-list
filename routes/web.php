<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()
{
    return redirect()->route('tasks.index');
});

Route::prefix('tasks')->group(function () {
    Route::get('/', function() {
        return view('tasks.index');
    })->name('tasks.index');
});