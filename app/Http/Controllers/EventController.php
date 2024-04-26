<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.event.index', [
            "title" => "Event | Dashboard",
            "event" => Event::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.event.create', [
            "title" => "Create Event",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'sub' => 'required',
            'img' => 'image|file|max:5116',
            'date' => 'required|date|date_format:Y-m-d|after_or_equal:today'
        ]);

        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('event-images');
        }
        
        Event::create($validatedData);

        return redirect('dashboard/event')->with('success', 'New mad has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('dashboard.event.show', [
            "title" => "Event | Dashboard",
            "event" => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('dashboard.event.edit', [
            "title" => "Edit Event",
            "event" => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'sub' => 'required',
            'img' => 'image|file|max:5116',
            'date' => 'required|date|date_format:Y-m-d|after_or_equal:today'
        ]);

        if ($request->file('img')) {
            $oldImagePath = $event->img; 
            $request->validate([
                'img' => 'image|mimes:jpeg,png,jpg,gif|max:5116'
            ]);
            $validatedData['img'] = $request->file('img')->store('event-images');
        
            if ($oldImagePath && Storage::exists($oldImagePath)) {
                Storage::delete($oldImagePath);
            }
        }
        
        Event::where('id', $event->id)->update($validatedData);

        return redirect('dashboard/event')->with('success', 'New mad has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/dashboard/event')->with('success', 'Mad has been deleted');
    }
}
 