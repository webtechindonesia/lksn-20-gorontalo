<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Vote,Poll,Choice,User};
use App\Http\Resources\PollResource;

class PollController extends Controller
{
    public function index()
    {
        $polls = Poll::with('vote')->latest()->get();
        return PollResource::collection($polls);
    }
}
