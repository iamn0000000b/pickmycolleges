<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExamCategoryStoreRequest;
use App\Http\Requests\ExamCategoryUpdateRequest;
use App\Models\ExamCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExamCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exam_categories = ExamCategory::all();

        if(request()->ajax()) {
            return datatables()->of($exam_categories)
                ->addIndexColumn()
                ->editColumn('created_at', function($row) {
                    return Carbon::parse($row->created_at)->toDateTimeString();
                })
                ->addColumn('action', function($row) {
                    return view('admin.includes.datatablesActions', [
                        'crudRoutePart' => 'exam_categories',
                        'row' => $row,
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.exam_categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.exam_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ExamCategoryStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamCategoryStoreRequest $request)
    {
        ExamCategory::create($request->all());

        return redirect()->route('admin.exam_categories.index')->with('success', 'Exam Category added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamCategory  $examCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ExamCategory $examCategory)
    {
        return view('admin.exam_categories.show', compact('examCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamCategory  $examCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamCategory $examCategory)
    {
        return view('admin.exam_categories.edit', compact('examCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ExamCategoryUpdateRequest  $request
     * @param  \App\Models\ExamCategory  $examCategory
     * @return \Illuminate\Http\Response
     */
    public function update(ExamCategoryUpdateRequest $request, ExamCategory $examCategory)
    {
        $examCategory->update($request->all());

        return redirect()->route('admin.exam_categories.index')->with('success', 'Exam Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamCategory  $examCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamCategory $examCategory)
    {
        $examCategory->exams()->each(function ($exam) {
            $exam->delete();
        });

        $examCategory->delete();

        return redirect()->route('admin.exam_categories.index')->with('success', 'Exam Category deleted successfully.');
    }
}
