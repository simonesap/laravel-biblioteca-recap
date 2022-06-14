<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Generi extends Model
{
    protected $fillable = [
        'generi'
    ];

    public function books(){
        return $this->belongsToMany('App\Models\Book');
    }

}
