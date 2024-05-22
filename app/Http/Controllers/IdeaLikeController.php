<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaLikeController extends Controller
{
    public function like(Idea $idea)
    {
        $idea->likes()->attach(auth()->user()->id);
        return back();
    }

    public function unlike(Idea $idea)
    {
        $idea->likes()->detach(auth()->user()->id);
        return back();
    }
}
