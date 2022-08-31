<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\StoreController;
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


//==================================== START EMAIL-SENDER URLS =================================
Route::get('/verifyemail/{id}', [WebController::class, 'emailverify'])->name('emailverify');

Route::post('/subscribe', [WebController::class, 'subscribe'])->name('subscribe');

Route::get('/emailunsubscribe/{id}',[WebController::class, 'emailunsubscribe']);

//==================================== END EMAIL-SENDER URLS =================================


//==================================== START EXTERNAL URLS =================================
Route::get('/NovosDesafios2', function(){
    return redirect('https://onerpm.link/612292326069');
});

Route::get('/Novos-Desafios-II', function(){
    return redirect('https://onerpm.link/612292326069');
}
);
//==================================== END EXTERNAL URLS =================================

//=================================== START EVENTOS URLS ================================

Route::get('/eventdetail',[EventController::class, 'details'])->name('eventDetail');

//=================================== FIM EVENTS URLS ================================

//====================================== START USER URLS ==============================

Route::get('/signup',[WebController::class, 'signup'])->name('signup');

Route::get('/leadform',[ClientController::class, 'leadForm'])->name('leadform');

Route::post('/lead',[ClientController::class, 'lead'])->name('lead');

Route::get('/login',[WebController::class, 'login'])->name('login');

Route::post('/loginvalidate',[ClientController::class, 'loginValidate'])->name('loginvalidate');

Route::post('/regist',[ClientController::class, 'regist'])->name('regist');

Route::get('/registrationEmailVerify',[ClientController::class, 'registrationEmailVerify'])->name('registVerify');

// Middlwware==============================
Route::middleware(['auth:clients', 'auth.session'])->group(function () {

Route::get('/logout',[ClientController::class, 'logout'])->name('logout');

Route::get('/profile',[ClientController::class, 'index'])->name('profile');

Route::get('/config',[ClientController::class, 'profileConfig'])->name('profileConfig');

Route::post('/updateProfile',[ClientController::class, 'updateProfile'])->name('updateProfile');

Route::get('/posts',[ClientController::class, 'posts'])->name('posts');

});
// ====================================== END USER URLS ==============================


Route::get('/store',[StoreController::class, 'index'])->name('loja');

Route::get('/dash/login',[AdminController::class, 'login'])->name('loginAdmin');

// ==========================================  ADMIN ROUTES ==========================================
Route::group(['middleware'=> ['auth:users']], function(){

Route::get('/dash/admin',[AdminController::class, 'index'])->name('dash');

Route::post('/dash/loginRq',[AdminController::class, 'ApiLogin'])->name('loginAdminRequest');

Route::get('/dash/logout',[AdminController::class, 'logout'])->name('adminLogout');

Route::get('/dash/createuser',[AdminController::class, 'createUser'])->name('adminCreate');

Route::post('/dash/newUser',[AdminController::class, 'newUser'])->name('newUser');

// =====================/// Music
Route::get('/dash/musics',[MusicController::class, 'index'])->name('musicindex');

Route::get('/dash/uploadmusic',[AdminController::class, 'uploadmusic'])->name('uploadmusic');

Route::post('/dash/newsong',[MusicController::class, 'savemusic'])->name('savemusic');

Route::get('/dash/updatesong/{id}',[MusicController::class, 'updatesong'])->name('updatesong');

Route::post('/dash/updatemusic/{id}',[MusicController::class, 'updatemusic'])->name('updatemusic');

Route::get('/dash/deletesong/{id}',[MusicController::class, 'deletemusic'])->name('deletemusic');

// =====================/// Slide
Route::get('/dash/slides',[SlideController::class, 'index'])->name('slideindex');

Route::get('/dash/uploadslide',[SlideController::class, 'uploadslide'])->name('uploadslide');

Route::post('/dash/newslide',[SlideController::class, 'saveslide'])->name('saveslide');

Route::get('/dash/updateslide/{id}',[SlideController::class, 'updateslide'])->name('updateslide');

Route::post('/dash/slideupdate/{id}',[SlideController::class, 'slideupdate'])->name('slideupdate');

Route::get('/dash/deleteslide/{id}',[SlideController::class, 'deleteslide'])->name('deleteslide');

});
