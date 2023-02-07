<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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


Route::get('/', [DemoController::class,'index']);
Route::get('/chapitre', [DemoController::class,'create'])->name('chapitre');
Route::post('/chapitre', [DemoController::class,'Store'])->name('chapitre.store');
Route::get('/chapitre/{chapitre}', [DemoController::class,'show'])->name('chapitre.show');
Route::get('/article', [DemoController::class,'createe'])->name('article');
Route::post('/article', [DemoController::class,'storee'])->name('article.storee');
Route::get('/listeChapitre', [DemoController::class,'listeChapitre'])->name('listeChapitre') ;
Route::get('/listeArticle', [DemoController::class,'listeArticle'])->name('listeArticle') ;
Route::delete('/listeArticle/{id}',[DemoController::class,'destroy'])->name('destroy');
Route::delete('/listeChapitre/{id}',[DemoController::class,'destroyy'])->name('destroyy');

