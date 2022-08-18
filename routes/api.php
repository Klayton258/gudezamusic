<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\EventsApiController;
use App\Http\Controllers\ManageClientsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=> ['auth:sanctum']], function(){

    Route::post('/logout', [DashController::class, 'userlogout']);

    Route::get('/', [DashController::class, 'index']);

    Route::get('/songs', [DashController::class, 'allsongs']);

    Route::post('/newslide', [DashController::class, 'homeslide']);

    Route::get('/slides', [DashController::class, 'slides']);

    Route::get('/slidebyid/{id}', [DashController::class, 'slidebyid']);


    Route::post('/newsong', [DashController::class, 'savemusic']);

    Route::get('/songbyid/{id}', [DashController::class, 'musicbyid']);

    Route::post('/newvideo', [DashController::class, 'savevideo']);

    Route::get('/videos', [DashController::class, 'videos']);

    Route::get('/deletevideo/{id}', [DashController::class, 'deletevideo']);

    Route::post('/newartist', [DashController::class, 'saveartist']);

    Route::get('/artists', [DashController::class, 'allartists']);

    Route::get('/artistbyid/{id}', [DashController::class, 'artistbyid']);

    Route::post('/newuser', [DashController::class, 'createuser']);

    Route::get('/events', [EventsApiController::class, 'index']);

    Route::post('/newEvent', [EventsApiController::class, 'newEvent']);

    // ========================== START CLIENTS MANAGEMENT URLS ========================


    Route::get('/leads', [ManageClientsController::class, 'leads']);

    Route::get('/clients', [ManageClientsController::class, 'clients']);

    // ========================== END CLIENTS MANAGEMENT URLS ========================

});

Route::post('/updateslide/{id}', [DashController::class, 'updateslide']);

Route::delete('/deleteSlide/{id}', [DashController::class, 'slidedelete']);

Route::post('/updateArtist/{id}', [DashController::class, 'updateartist']);

Route::delete('/deleteArtist/{id}', [DashController::class, 'artistdelete']);

Route::post('/updatesong/{id}', [DashController::class, 'updatemusic']);

Route::delete('/delete/{id}', [DashController::class, 'musicdelete']);

Route::post('/login', [DashController::class, 'userlogin']);






