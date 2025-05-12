<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (){
    return "test is here";
});

Route::get('/test2', function(){
    return "something in test2 route";
});
