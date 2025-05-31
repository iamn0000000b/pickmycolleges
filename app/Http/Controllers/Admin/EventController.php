<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Models\Event;
use App\Models\Goal;
use App\Traits\MediaUploadTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class EventController extends Controller
{
    use MediaUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : View | ViewFactory
    {
        $events = Event::with('goal')->get();

        if(request()->ajax()) {
            return datatables()->of($events)
                ->addIndexColumn()
                ->addColumn('goal_title', function($row) {
                    return $row->goal->title;
                })
                ->editColumn('image', function($row) {
                    if(!empty($row->image)) {
                        return '<img src="'.$row->image_url.'" alt="" class="img-responsive">';
                    }
                })
                ->editColumn('created_at', function($row) {
                    return Carbon::parse($row->created_at)->toDateTimeString();
                })
                ->addColumn('action', function($row) {
                    return view('admin.includes.datatablesActions', [
                        'crudRoutePart' => 'events',
                        'row' => $row,
                    ]);
                })
                ->rawColumns(['goal_title', 'image', 'action'])
                ->make(true);
        }

        return view('admin.events.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View | ViewFactory
    {
        $goals = Goal::all()->pluck('title','id');

        return view('admin.events.create', compact('goals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\EventStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request) : RedirectResponse
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $this->uploadMedia($file, 'events');
        }

        Event::create($data);

        return redirect()->route('admin.events.index')->with('success', 'Event added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event) : View | ViewFactory
    {
        $event->load('goal');

        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event) : View | ViewFactory
    {
        $goals = Goal::all()->pluck('title','id');

        $event->load('goal');

        return view('admin.events.edit', compact('goals', 'event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EventUpdateRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(EventUpdateRequest $request, Event $event) : RedirectResponse
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $this->uploadMedia($file, 'events', $event->image);
        }

        $event->update($data);

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event) : RedirectResponse
    {
        $this->unlinkMedia('events', $event->image);
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }
}
