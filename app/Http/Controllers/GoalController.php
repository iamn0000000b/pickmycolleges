<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function show($slug)
    {
        $goal = Goal::with('events')->where('slug', $slug)->firstOrFail();
        
        return view('frontend.goals.show', compact('goal'));
    }
}
