<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Choice,Poll};
use App\Http\Resources\ChoiceResource;

class ChoiceController extends Controller
{
    public function index()
    {
        $choices = Choice::with('poll')->latest()->get();
        return ChoiceResource::collection($choices);
    }
}
