<?php

namespace App\Models;

use App\Models\CategorieBlog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    
    public function categorie_blog(){
        return $this->belongsTo(CategorieBlog::class);
    }
}
