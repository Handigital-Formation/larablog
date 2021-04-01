<?php

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

/* Route::get('/', function () {
 *     return view('welcome');
 * }); */
/* Route::get('/', function () {
 *     return view('home');
 * }); */
/* Route::get('/contact', function () {
 *     return view('contact');
 * }); */
/* Route::get('/task', function () {
 *     $tasks = [
 *         'Apprendre laravel',
 *         'Sortir me promener'
 *     ];
 *     
 *     return view('task',
 *                 [
 *                     'monProjet' => 'Projet numéro 1',
 *                     'tasks' => $tasks,
 *                     'test' => request('title')
 *                 ]
 *     );
 * }); */

use App\Http\Controllers\PagesController;
Route::get('/', [PagesController::class, 'home']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/task', [PagesController::class, 'task']);

use App\Http\Controllers\ProjectController;
Route::get('/project', [ProjectController::class, 'index']);
