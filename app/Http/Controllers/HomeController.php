<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use App\Models\ExamCategory;
use App\Models\Goal;
use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $goals = Goal::all();
        $events = Event::query()
            ->whereDate('application_last_date', '>=', date('Y-m-d'))
            ->orderBy('application_last_date')
            ->get();
        $articles = Article::latest()->limit(4)->get();
        $exam_categories = ExamCategory::with('exams')->get();

        return view('home', compact('goals', 'events', 'articles', 'exam_categories'));
    }

    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $view = $page->slug;

        if(! view()->exists($view)) {
            $view = 'default';
        }

        return view($view, compact('page'));
    }
}
