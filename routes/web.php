<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LecteurController;
use App\Http\Controllers\VideoController;
use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    echo 'test';
});

Route::get('/essaiDeDebug', function () {
    return view('lecteur.index');
});

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/login', [AuthController::class, 'dologin']);
Route::post('/suscrib', [AuthController::class, 'suscrib'])->name('auth.suscrib');



Route::prefix('/')->name('index')->controller(VideoController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->middleware('auth');
});

Route::get('/lecteur/{slug}', [LecteurController::class, 'index'])->where([
    'slug' => '[a-z0-9\-]+'
])->name('lecteur');
Route::post('/lecteur/update', [VideoController::class, 'update'])->name('videos.update');
Route::delete('/videos/{video}', [VideoController::class, 'destroy'])->name('videos.destroy');

Route::get('/recherchertemporaire', function () {
    return view('rechercher.index');
});

Route::get('/chainetemporaire', function () {
    $categories = Category::all();
    return view('chaine.index', [
        'categories' => $categories
    ]);
});

Route::get('/insertion', function () {
    
});

// $category = new Role();
// $category->name = 'Administrateur';
// $category->save();


//  User::create([
//      'name'=>'Lennon',
//      'surname'=>'Bob',
//      'age'=>34,
//      'sexe'=>'masculin',
//      'pseudo'=>'Pyrobarbare',
//      'adress'=>'18 avenue pyrobarbare
//      batiment 3 appt 8
//      97400 St Denis',
//      'email'=>'lennonbob@test.com',
//      'password'=>Hash::make('bobLennon1'),
//      'role_id'=>3,
//  ]);