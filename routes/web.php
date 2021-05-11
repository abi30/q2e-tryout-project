<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VenueController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [VenueController::class, 'index']);
Route::get('/home', [VenueController::class, 'index']);





Route::post('/update_venue', [VenueController::class, 'update_venue']);
Route::get('/edit_venue/{id}', [VenueController::class, 'edit_venue']);

Route::get('/add_venue', [VenueController::class, 'add_venue']);
Route::post('/save_venue', [VenueController::class, 'save_venue']);
Route::get('/venue_list', [VenueController::class, 'list'])->name('venue_list');
Route::get('/add_venue_form', [VenueController::class, 'add_venue_form'])->name('add_venue_form');

Route::get('/venue_delete/{id}',[VenueController::class, 'destroy']);
Route::get('/venue_details/{id}',[VenueController::class, 'details']);


Route::get('/add_event',[VenueController::class, 'add_event']);
Route::post('/save_event',[VenueController::class, 'save_event']);


Route::get('/event_list',[VenueController::class, 'event_list']);






Route::get('/readme', function () {
    return view('readme');
});

Route::get('/hello', function () {
    return "every thing gooing well";
});


