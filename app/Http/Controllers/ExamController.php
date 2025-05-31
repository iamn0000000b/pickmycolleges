<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function show($slug)
    {
        $exam = Exam::where('slug', $slug)->firstOrFail();
        
        return view('frontend.exams.show', compact('exam'));
    }
}
