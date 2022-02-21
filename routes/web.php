<?php

use App\Http\Controllers\PlayListController;
use App\Http\Controllers\SongController;
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

//Route::get("homepage",)
Route::get('/', function () {
    return view('fontend.home');
})->name("web");
Route::get('/home',[SongController::class,"dataSong"])->name("homepage");
Route::post('/login', [UserController::class,"login"])->name("login");
Route::get('/signup',[UserController::class,"showFormLogin"])->name("showFormLogin");
Route::get("/Song",[SongController::class,"getAllSong"]);
Route::get("/myProfile",[SongController::class,"getAllSinger"]);
Route::get('/logout',[UserController::class,"logout"])->name("logout");

Route::post("/uploadSong",[SongController::class,"uploadSong"])->name("uploadSong");
Route::get('/playlist',[PlayListController::class,"getAllPlayList"])->name("playlist");
Route::get('/profile',[UserController::class,"getAll"])->name("profile");
//
Route::get("/detail/{id}",[SongController::class,"showAllSong"] )->name("detailPlaylist");

Route::prefix("/user")->group(function(){
    Route::post("/update",[UserController::class,"update"])->name("user.update");
    Route::post("/register",[UserController::class,"register"])->name("user.register");
    Route::get("/formRegister",[UserController::class,"showFormRegister"])->name("user.showFormRegister");
});


Route::prefix("/playlist")->group(function(){
    Route::post('/createPlaylist',[PlayListController::class,"creatPlaylist"])->name("createPlaylist");
});

