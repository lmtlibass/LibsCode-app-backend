<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\DemandeFController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ListeInscritController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NoteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
    Route::post('/refresh', 'refresh');
<<<<<<< HEAD
    Route::post('/logout', 'logout');
});         

=======
});
>>>>>>> de38c6a18483e437229b94d0d5d9af189e206c39
Route::controller(CoursController::class)->group(function (){
    Route::get('/coursRe', 'coursR');
    Route::get('/coursA', 'getCours');
    Route::get('/cours', 'index');
    Route::get('cours/{id}', 'show');
    Route::get('/coursModule/{moduleid}', 'getCourByModule');
    Route::post('/cours', 'store');  
    Route::delete('/cours/{id}', 'delete');  
    Route::put('/cours/{id}', 'update');
    Route::get('cour/{user}', 'getCourByUser');
});

Route::controller(CommentaireController::class)->group( function() {
    Route::get('/commentaires', 'index');
    Route::post('/commentaires', 'store');
    Route::delete('/commentaire/{id}', 'delete');
});

Route::controller(DemandeFController::class)->group( function(){
    Route::get('/demandes', 'index');
    Route::delete('/demandes/{id}', 'delete');
    Route::get('/demandes/{id}', 'show');
    Route::post('/addemandes', 'store');
});

Route::controller(EvenementController::class)->group( function(){
    Route::get('/evenements', 'index'); //get all events and the liste
    Route::post('/evenements', 'store');
    Route::get('/evenements/{id}', 'show');
    Route::put('/evenements/{id}', 'update');
    Route::delete('/evenements/{id}', 'delete');
    Route::get('/evenementRe', 'evenementR');
    Route::get('/evenementA', 'getEvenement');
    Route::get('evenement/{user}', 'getEventsByUser');
});

Route::controller(ListeInscritController::class)->group(function(){
    Route::get('/listeinscrits', 'index');
    Route::post('/listeinscrits', 'store');
    Route::delete('/listeinscrits/{id}', 'delete');
    Route::get('/liste/{eventsid}', 'getListeByEvent');
});


Route::controller(NoteController::class)->group( function (){
    Route::get('/notes', 'index');
    Route::post('/notes', 'index');
});

Route::controller(ModuleController::class)->group( function(){
    Route::get('/modules', 'index');
    Route::get('/module', 'show');
});
<<<<<<< HEAD



// Route::middleware(['auth', 'role:admin'])->group(function(){
//     // Route::get('/demandes', [DemandeFController::class, 'index']);
//     // Route::put('/evenements/{id}', [EvenementController::class, 'update']);
//     // Route::delete('/evenements/{id}', [EvenementController::class, 'delete']);
//     // // Route::get('/coursA', [CoursController::class, 'getCours']);
    
// });
=======
>>>>>>> de38c6a18483e437229b94d0d5d9af189e206c39

// Route::middleware(['auth', 'role:createur'])->group(function(){
//     // Route::get('/cours/{id}', [CoursController::class, 'show']);
// });

// Route::middleware(['auth', 'role:apprenant'])->group(function(){
//     // Route::get('/cours/{id}', [CoursController::class, 'show']);
// });
