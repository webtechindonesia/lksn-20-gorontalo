<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Vote,Poll,Choice,User};
use App\Http\Resources\VoteResource;


class VoteController extends Controller
{
    public function index()
    {
        $votes = Vote::with('poll')->latest()->get();
        return VoteResource::collection($votes);
    }
}
