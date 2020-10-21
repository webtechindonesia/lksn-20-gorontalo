<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $guarded = [];

    public function votes()
    {
        return $this->hasMany('App\Votes');
    }

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }
}
