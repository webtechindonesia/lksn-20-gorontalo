<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $guarded = [];

    public function vote()
    {
        return $this->hasMany(Vote::class);
    }

    public function choice()
    {
        return $this->hasMany(Choice::class);
    }
}
