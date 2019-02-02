<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelets;

class Character extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //use SoftDeletes;
    

   	protected $rules = [
   		'heroe' => 'required|unique:character|min:2|max:100',
   		'real_name' => 'required|unique:character|min:2|max:100',
   		'description' => 'required',
   		'image' => 'required'
   	];

   	protected $message = [
   		'heroe.required' => 'El nombre del personaje es obligatorio.',
   		'heroe.unique' => 'El heroe con este nombre ya fue registrado.',
   		'heroe.min' => 'La cantidad mínima de caracteres es 2.',
   		'heroe.max' => 'La cantidad máxima de caracteres es 100',
   		'real_name.required' => 'El nombre del personaje es obligatorio.',
   		'real_name.unique' => 'El heroe con este nombre real ya fue registrado.',
   		'real_name.min' => 'La cantidad mínima de caracteres es 2.',
   		'real_name.max' => 'La cantidad máxima de caracteres es 100',
   		'description.required' => 'Es necesario una descripción del personaje.',
   		'image.required' => 'La foto del personaje es necesario.'
   	];

    protected $fillable = [
      'id','heroe','real_name','description', 'image', 'points','movie_id'
    ];

    protected $dates = ['deleted_at'];

    protected $table = 'character';

    public function movie(){
      return $this-> belongsTo(Movie::class, 'movie_id');
    }

    public function getValidation($type){
    	return $type == 1 ? $this->rules : $this->message;
    }
}
