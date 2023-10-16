<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    echo 'test';
});

Route::get('/essaiDeDebug' , function(){
    return view('lecteur.index');
});