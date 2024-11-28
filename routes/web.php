<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
Route::get('/list', [EtudiantController::class, 'list']);
Route::get('/ajouter', [EtudiantController::class, 'add']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'add_etudiant_traitement']);
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']);
