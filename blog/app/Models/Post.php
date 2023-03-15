<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion uno a muchos
    public function user(){
        return $this->belongsTo(User::class);
    }
    //Relacion uno a muchos
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion uno a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno
    public function image(){
        return $this->morphOne(Images::class,'imageable');
    }
}
