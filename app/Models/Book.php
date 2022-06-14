<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Generi;
use App\Models\Author;

class Book extends Model
{

    public function authors(){
        return $this->belongsToMany('App\Models\Author');
    }

    public function generis(){
        return $this->belongsToMany('App\Models\Generi');
    }


    protected $fillable = [
        'title', 'image', 'creation_year', 'description'
    ];
}
