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

use App\Http\Controllers\ComicsController;

use App\Http\Controllers\ComicController;


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



/*
//Rotta per CREATE COMIC
Route::get('/comics/comic/create', [ComicController::class, 'create'])->name('comic.create'); // mostra il form di creazione COMIC
//Rotta per pagina COMIC
Route::get('/comics/comic/{comic}', [ComicController::class, 'show'])->name('comic.show'); // mostra il singolo COMIC
//Rotta per EDIT COMIC
Route::get('/comics/comic/{comic}/edit', [ComicController::class, 'edit'])->name('comic.edit'); // mostra il form di modifica COMIC
//Rotta per EDIT COMIC
Route::post('/comics/index', [ComicController::class, 'store'])->name('comic.store'); // crea il post sul DB
//Rotta per pagina COMIC
Route::put('/comics/comic/{comic}', [ComicController::class, 'update'])->name('comic.update'); // salva le modifiche sul DB
//Rotta per pagina COMIC
Route::delete('/comics/comic/{comic}', [ComicController::class, 'destroy'])->name('comic.destroy'); // per eliminare un COMIC dal DB
*/


// Rotta per risorsa COMIC
Route::resource('comic', ComicController::class);
