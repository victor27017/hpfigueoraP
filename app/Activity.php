<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $table = "activities";
    public function matter(){
        return $this->belongsTo('App\Matter');
}
