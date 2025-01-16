<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\KategoryEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $listEvent = KategoryEvent::all();
        return view('list-event', ['data' => $listEvent]);
    }

    public function showCategory($categoryId)
    { 
         // Example: Fetch events by category ID
        $category = KategoryEvent::findOrFail($categoryId); // Assuming you have a Category model
        $events = Event::where('category_id', $categoryId)->get();

        return view('kategori-event', ['data' => $events, 'title' => $category->name]);
    }

    public function showEvent($categoryId, $eventId)
    {
        $event = Event::find($eventId);

        // Pass the event details to the view
        return view('event', [
            'event' => $event,
        ]);
    }
}
