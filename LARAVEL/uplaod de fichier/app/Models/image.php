<?php

namespace App\Models;

use App\Models\Post;
use App\Models\artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class image extends Model
{
    use HasFactory;

   public function post(){
    return $this->belongsTo(Post::class);
   }

   public function artist(){
    return $this ->hasOne(artist::class);
   }
}
