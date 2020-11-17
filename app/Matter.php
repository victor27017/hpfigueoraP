<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    //
    protected $table = "matters";
    public function evaluation(){
        return $this->belongsTo('App\Evaluation');
}
