<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GoalStoreRequest;
use App\Http\Requests\GoalUpdateRequest;
use App\Models\Goal;
use App\Traits\MediaUploadTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class GoalController extends Controller
{
    use MediaUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View|ViewFactory
    {
        $goals = Goal::all();

        if (request()->ajax()) {
            return datatables()->of($goals)
                ->addIndexColumn()
                ->editColumn('image', function ($row) {
                    if (!empty ($row->image)) {
                        return '<img src="' . $row->image_url . '" alt="" class="img-responsive">';
                    }
                })
                ->editColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->toDateTimeString();
                })
                ->addColumn('action', function ($row) {
                    return view('admin.includes.datatablesActions', [
                        'crudRoutePart' => 'goals',
                        'row' => $row,
                    ]);
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }

        return view('admin.goals.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View|ViewFactory
    {
        return view('admin.goals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\GoalStoreRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(GoalStoreRequest $request): RedirectResponse
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $this->uploadMedia($file, 'goals');
        }

        Goal::create($data);

        return redirect()->route('admin.goals.index')->with('success', 'Goal added successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal): View|ViewFactory
    {
        return view('admin.goals.show', compact('goal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal): View|ViewFactory
    {
        return view('admin.goals.edit', compact('goal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\GoalUpdateRequest  $request
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */

    public function update(GoalUpdateRequest $request, Goal $goal): RedirectResponse
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $this->uploadMedia($file, 'goals', $goal->image);
        }

        $goal->update($data);

        return redirect()->route('admin.goals.index')->with('success', 'Goal updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal) : RedirectResponse
    {
        $goal->events()->each(function ($event) {
            $this->unlinkMedia('events', $event->image);
            $event->delete();
        });

        $this->unlinkMedia('goals', $goal->image);
        $goal->delete();

        return redirect()->route('admin.goals.index')->with('success', 'Goal deleted successfully.');
    }
}
