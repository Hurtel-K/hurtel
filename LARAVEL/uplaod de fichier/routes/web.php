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
Route::get('/register',[postcontroller::class,'register']);
Route::get('/posts/{id}',[postcontroller::class,'show'])->name ('posts.show');
Route::get('/contact',[postcontroller::class,'contact'])->name('contact');


     /*@forelse($post->comments as $comment)
     
         <div>{{$comment->content}}| cree le{{ $comment ->created_at->format('d/m/y')}}</div>
     @empty
         <Span>Aucun commentaire pour ce poste.</Span>
     @endforelse*/


/*Route::get('/post', function () {
    return response() ->json([
        'title'=> 'mon titre',
        'description'=>'ma description'
    ]);
});
*/