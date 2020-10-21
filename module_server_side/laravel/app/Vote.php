<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = "Votes";

 
public function polls() 
{ 
    return $this->belongsTo('App\Polls'); 
}

}
