<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    public function authors(){
        return $this->belongsToMany('App\Models\Author');
    }

    protected $fillable = [
        'title', 'image', 'creation_year', 'description'
    ];
}
