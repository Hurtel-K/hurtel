<?php

namespace App\Models;

use App\Models\tag;
use App\Models\image;
use App\Models\artist;
use App\Models\comment;
use App\Models\comments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;




class Post extends Model
{
    use HasFactory;

     
/*public function comments()
{
return  $this->HasMany(comments::class);

}*/

public function comments()
{
    return $this->morphMany(comment::class,'commentable');
}
public function imageartist(){
    return $this ->hasOneThrough(artist::class,image::class);
}

public function tags(){
    return $this->BelongsToMany(tag::class);

}
}
