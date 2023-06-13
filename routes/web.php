<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('users', UserController::class);

Route::get('/', [UserController::class, 'home']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/signup', [UserController::class, 'signup']);
Route::get('/etudiant', [UserController::class, 'etudiant']);
Route::get('/rp', [UserController::class, 'rp']);
Route::get('/jury', [UserController::class, 'jury']);
Route::get('/encadreur', [UserController::class, 'encadreur']);
Route::post('/creer_compte', [UserController::class, 'creer_compte']);

// Route::get('/', function (){
//     return view('users.home');
// });
// Route::get('/login', function (){
//     return view('users.login');
// });
// Route::get('/signup', function (){
//     return view('users.signup');
// });