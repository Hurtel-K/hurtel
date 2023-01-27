<?php

namespace App\Models;

use App\Models\comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class video extends Model
{
    use HasFactory;
    
public function comments()
{
    return $this->morphMany(comment::class,'commentable');
}
}
