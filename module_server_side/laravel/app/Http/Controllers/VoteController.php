<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Votes,Poll,Choice,User};


class VoteController extends Controller
{
    public function index()
    {
        $votes = Vote::with('poll','choice')->latest()->get();
        return VoteResource::collection($votes);
    }
}
