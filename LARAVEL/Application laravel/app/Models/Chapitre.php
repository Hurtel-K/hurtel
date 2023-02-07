<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class chapitre extends Model
{
    use HasFactory;
    protected $fillable = ['titre'];
   
   
    public function Articles(){

    return $this->hasMany(Article::class);
}
}
