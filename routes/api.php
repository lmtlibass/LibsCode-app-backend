<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\DemandeFController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\NoteController;
use Illuminate\Routing\Router;

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
    Route::post('/logout', 'logout');
    Route::post('/refresh', 'refresh');
});

Route::controller(CoursController::class)->group(function (){
    Route::get('/coursRe', 'coursR');
    Route::get('/cours', 'index');
    Route::get('cours/{id}', 'show');
    Route::post('/addcours', 'store');
    Route::delete('/deletecours/{id}', 'delete');  
    Route::put('/updatecours/{id}', 'update');
});

Route::controller(CommentaireController::class)->group( function() {
    Route::get('/commentaires', 'index');
    Route::post('/addCommentaire', 'store');
    Route::delete('/deleteCommentaire/{id}', 'delete');
    
});

Route::controller(DemandeFController::class)->group( function(){
    Route::post('/addemande', 'store');
});

Route::controller(EvenementController::class)->group( function(){
    Route::get('/evenementRe', 'evenementR');
    Route::get('/evenement', 'index');
    Route::post('/addEvenement', 'store');
    Route::put('/updateEvenement/{id}', 'update');
});

Route::controller(NoteController::class)->group( function (){
    Route::get('/note', 'index');
    Route::post('/addNote', 'index');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/demandes', [DemandeFController::class, 'index']);
    Route::delete('/deleteEvenement/{id}', [EvenementController::class, 'update']);
    
});

Route::middleware(['auth', 'role:createur'])->group(function(){
    // Route::get('/cours/{id}', [CoursController::class, 'show']);
});

Route::middleware(['auth', 'role:apprenant'])->group(function(){
    // Route::get('/cours/{id}', [CoursController::class, 'show']);
});
