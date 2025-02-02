<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $guarded = [];

 
public function poll() 
{ 
    return $this->belongsTo(Poll::class); 
}

public function choice() 
{ 
    return $this->belongsTo(Choice::class); 
}

}
