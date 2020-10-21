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

    public function store()
    {
        $poll = Poll::find(request('poll'));
        $user = User::find(request('user'));
        $poll = Poll::find(request('poll'));
        $vote = Vote::create([
            'choice_id'  => request('choice_id'),
            'user_id'  => request('user_id'),
            'poll_id'  => request('poll_id'),
            // 'choice_id'  => $choice->id,
            // 'user_id'  => $user->id,
            // 'poll_id'  => $poll->id,
        ]);
        return response()->json ([
            'message' => 'your vote submitted',
            'votes' => $vote
        ]);
    }
}
