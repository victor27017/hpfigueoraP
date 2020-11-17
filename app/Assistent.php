<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistent extends Model
{
    //
    protected $table = "assistents";
    public function user(){
        return $this->hasMany('App\User');
}
