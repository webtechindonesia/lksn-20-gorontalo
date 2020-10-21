<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $guarded = [];

    public function poll() 
{ 
    return $this->belongsTo(Poll::class); 
}

public function vote() 
{ 
    return $this->belongsTo(Vote::class); 
}
}
