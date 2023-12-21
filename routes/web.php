<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('365jobs.page.homepage');
});
