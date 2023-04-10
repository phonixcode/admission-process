<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.pages.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'             => 'required|string',
            'description'       => 'required|string',
            'photo'             => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'time_from'         => 'required|string',
            'time_to'           => 'required|string',
            'platform'          => 'required|string',
            'date'              => 'required',
            'link'              => 'required',
            'email_address'     => 'required|email',
            'phone_number'      => 'required',
            'website'           => 'required',
        ]);

        $data = $request->all();

        $slug = Str::slug($request->title);
        $data['slug'] = $slug;

        if ($image = $request->file('photo')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/events/', $imageName);
            $data['photo'] = "$imageName";
        }
        $status = Event::create($data);

        return $status
            ? redirect()->route('admin.events.index')->with('success', 'Successfully added event')
            : back()->with('errors', 'Error adding event');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return $event
            ? view('admin.pages.event.edit', compact('event'))
            : back()->with('error', 'Date not found');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        if ($event) {
            $request->validate([
                'title'             => 'required|string',
                'description'       => 'required|string',
                'photo'             => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'time_from'         => 'required|string',
                'time_to'           => 'required|string',
                'platform'          => 'required|string',
                'date'              => 'required',
                'link'              => 'required',
                'email_address'     => 'required|email',
                'phone_number'      => 'required',
                'website'           => 'required',
            ]);

            $data = $request->all();

            $slug = Str::slug($request->title);
            $data['slug'] = $slug;

            if ($image = $request->file('photo')) {
                // Delete old image
                if ($event->photo && file_exists(public_path("media/events/{$event->photo}"))) {
                    unlink(public_path("media/events/{$event->photo}"));
                }

                // Upload new image
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('media/events/', $imageName);
                $data['photo'] = "$imageName";
            } else {
                unset($data['photo']);
            }

            $status = $event->update($data);

            return $status
                ? redirect()->route('admin.events.index')->with('success', 'Successfully updated event')
                : back()->with('errors', 'Error updating event');
        } else {
            return back()->with('error', 'Date not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if ($event) {

            // Delete school photo
            if ($event->photo && file_exists(public_path("media/events/{$event->photo}"))) {
                unlink(public_path("media/events/{$event->photo}"));
            }

            $status = $event->delete();

            return $status
                ? redirect()->route('admin.events.index')->with('success', 'Successfully deleted event')
                : back()->with('errors', 'Error deleting event');
        } else {
            return back()->with('error', 'Date not found');
        }
    }
}
