<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable  = ['id','nombre','genero'];
    public function actors()
    {
    	return $this->hasMany(Character::class, 'movie_id');
    }
}
