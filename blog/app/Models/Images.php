<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    //Relacion muchos a muchos
    public function imageable(){
        return $this->morphTo();
    }
}
