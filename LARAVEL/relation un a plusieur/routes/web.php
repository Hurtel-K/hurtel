<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;

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

Route::get('/',[postcontroller::class,'index'])->name ('welcome');
Route::get('/posts/create',[postcontroller::class,'create'])->name('posts.create');
Route::post('/posts/create',[postcontroller::class,'store'])->name('posts.store');
Route::get('/posts/{id}',[postcontroller::class,'show'])->name ('posts.show');
Route::get('/contact',[postcontroller::class,'contact'])->name('contact');



/*Route::get('/post', function () {
    return response() ->json([
        'title'=> 'mon titre',
        'description'=>'ma description'
    ]);
});
*/