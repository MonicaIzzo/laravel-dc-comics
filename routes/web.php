<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\CollectiblesController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\FansController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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



// Rotta per pagina HOME
Route::get('/', [IndexController::class, 'index'])->name('index');


// Rotta per pagina CHARACTERS
Route::get('/characters', [CharactersController::class, 'characters'])->name('characters');

// Rotta per pagina MOVIES
Route::get('/movies', [MoviesController::class, 'movies'])->name('movies');


// Rotta per pagina TV
Route::get('/tv', [TvController::class, 'tv'])->name('tv');


// Rotta per pagina GAMES
Route::get('/games', [GamesController::class, 'games'])->name('games');


// Rotta per pagina COLLCECTIBLE
Route::get('/collectibles', [CollectiblesController::class, 'collectibles'])->name('collectibles');


// Rotta per pagina VIDEOS
Route::get('/videos', [VideosController::class, 'videos'])->name('videos');


// Rotta per pagina FANS
Route::get('/fans', [FansController::class, 'fans'])->name('fans');

// Rotta per pagina NEWS
Route::get('/news', [NewsController::class, 'news'])->name('news');


// Rotta per pagina SHOP
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');



// Rotta per pagina COMICS
Route::get('/comics/index', [ComicsController::class, 'index'])->name('comics.index'); // mostra la lista dei COMICS
