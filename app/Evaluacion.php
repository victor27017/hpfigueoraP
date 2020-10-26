<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluacions';
  public function temas(){
      return $this->hasMany('App\Tema');
  }  
}
