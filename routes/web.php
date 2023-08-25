<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ParraineController;
use App\Http\Controllers\AcquereurController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ChallengerproController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PosterController;
use App\Http\Controllers\ProjectConstuctController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::redirect('/connect', 'login', 302);
Route::redirect('/service.html', 'solution-acquereur', 302);
Route::redirect('/about.html', 'challenge-pro', 302);
Route::redirect('/parrain.html', 'parrainage', 302);
Route::redirect('/contact.html', 'contact', 302);

Route::get('/notavailable', function(){
    return view("frontend.404");
});
Route::get('/', function(){
    return view("frontend.index");
});
Route::get('/index.html', function(){
    return view("frontend.index");
});
Route::get('/solution-acquereur', function(){
    return view("frontend.service");
});
Route::get('/challenge-pro', function(){
    return view("frontend.about");
});
Route::get('/parrainage', function(){
    return view("frontend.parrain");
});
Route::get('/contact', function(){
    return view("frontend.contact");
});

Route::get('/action/op-success', function(){
    return view("frontend.op-success");
})->name("frontend.op-success");

Route::post("/acquereurs/font/store", [AcquereurController::class, 'store2'])->name("font.acquereurs.store");
Route::post("/challengerpros/font/store", [ChallengerproController::class, 'store2'])->name("font.challengerpros.store");
Route::post("/parraines/font/store", [ParraineController::class, 'store2'])->name("font.parraines.store");
Route::post("/contacts/font/store", [ContactController::class, 'store2'])->name("font.contacts.store");

Route::get('/acquereurs/loapp/{single}/list', [AcquereurController::class, 'getAcquereurs'])->name('acquereurs.list');
Route::get('/challengers/loapp/{single}/list', [ChallengerproController::class, 'getChallengers'])->name('challengers.list');
Route::get('/parrains/loapp/{single}/list', [ParraineController::class, 'getParrains'])->name('parrains.list');
Route::get('/contacts/loapp/{single}/list', [ContactController::class, 'getContacts'])->name('contacts.list');

Route::get('/checkdate/challenger/', [ChallengerproController::class, 'checkdate'])->name('challengers.check.date');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::resource('users', UserController::class);
        Route::resource('challengerpros', ChallengerproController::class);
        Route::resource('contacts', ContactController::class);
        Route::resource('parraines', ParraineController::class);
        Route::resource('acquereurs', AcquereurController::class);
        Route::resource('project-constucts', ProjectConstuctController::class);
        Route::resource('posters', PosterController::class);
    });
