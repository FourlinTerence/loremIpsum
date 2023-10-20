<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    echo 'test';
});

Route::get('/essaiDeDebug' , function(){
    return view('lecteur.index');
});

Route::get('/accueiltemporaire' , function(){
    return view('accueil.index');
});

Route::get('/recherchertemporaire' , function(){
    return view('rechercher.index');
});

Route::get('/chainetemporaire' , function(){
    return view('chaine.index');
});