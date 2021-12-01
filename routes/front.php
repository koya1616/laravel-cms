<?php
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    echo 'front';
});

Route::resource('posts', 'PostController')->only(['index','show']);