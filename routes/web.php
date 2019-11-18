<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});
