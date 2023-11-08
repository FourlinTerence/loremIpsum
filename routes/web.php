<?php

use App\Http\Controllers\VideoController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    echo 'test';
});

Route::get('/essaiDeDebug' , function(){
    return view('lecteur.index');
});

Route::prefix('/')->name('index')->controller(VideoController::class)->group(function(){
     Route::get('/', 'index')->name('index');
     Route::post('/','store');
    
    // Route::get('/new','create')->name('create');    
    // Route::post('/new','store'); 
     
    // Route::get('/{post}/edit','edit')->name('edit');
    // Route::post('/{post}/edit','update');
    
    // Route::get('/{slug}-{post}', 'show')
    // ->where([
    //     'id' => '[0-9]+',
    //     'slug' => '[a-z0-9\-]+'
    
    // ])->name('show');
});

Route::get('/recherchertemporaire' , function(){
    return view('rechercher.index');
});

Route::get('/chainetemporaire' , function(){
    return view('chaine.index');
});

Route::get('/insertion' , function(){
    $category = new Category();
    $category->name = 'Cuisine';
    $category->save();

});