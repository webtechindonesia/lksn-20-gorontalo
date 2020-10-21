<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = "choice";

    public function polls() 
{ 
    return $this->belongsTo('App\Polls'); 
}
}
