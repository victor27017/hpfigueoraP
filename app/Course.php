<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = "courses";
    public function matter(){
        return $this->hasMany('App\Matter');
    }
}
