<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    protected $table = "Votes";

    public function choice() 
{ 
    return $this->belongsTo('App\Choice'); 
}

public function polls() 
{ 
    return $this->belongsTo('App\Polls'); 
}

}
