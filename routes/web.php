<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'index'])->name('home');


Route::get('/artistas', [WebController::class, 'artistas'])->name('artistas');

Route::get('/musicas', [WebController::class, 'musicas'])->name('musicas');

Route::get('/moredetails{id}', [WebController::class, 'sogdetails'])->name('moredetails');

Route::get('/videos', [WebController::class, 'videos'])->name('videos');

Route::get('/eventos', [EventController::class, 'index'])->name('events');

Route::get('/sobrenos', [WebController::class, 'sobrenos'])->name('sobrenos');

Route::get('/artista{id}', [WebController::class, 'artista'])->name('artisdetails');

Route::get('/verifyemail/{id}', [WebController::class, 'emailverify'])->name('emailverify');

Route::post('/subscribe', [WebController::class, 'subscribe'])->name('subscribe');

Route::get('/emailunsubscribe/{id}',[WebController::class, 'emailunsubscribe']);

Route::get('/signup',[WebController::class, 'signup'])->name('signup');

Route::get('/login',[WebController::class, 'login'])->name('login');

Route::post('/regist',[ClientController::class, 'regist'])->name('regist');

//==================================== URLS =================================
Route::get('/NovosDesafios2', function(){
    return redirect('https://onerpm.link/612292326069');
});

Route::get('/Novos-Desafios-II', function(){
    return redirect('https://onerpm.link/612292326069');
}
);
//==================================== URLS =================================


Route::get('/eventdetail',[EventController::class, 'details'])->name('eventDetail');

// ====================================== User URLS ==============================

Route::get('/profile',[ClientController::class, 'index'])->name('profile');

Route::get('/posts',[ClientController::class, 'posts'])->name('posts');

// ====================================== User URLS ==============================
