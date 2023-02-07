<?php

namespace App\Models;

use App\Models\Chapitre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class article extends Model
{
    use HasFactory;
    protected $fillable = ['titre','nom','content','chapitre_id'];
    
    
    public function Chapitre(){

        return $this->belongsTo(Chapitre::class,"chapitre_id");
    }
}
