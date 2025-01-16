<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Wisata;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::limit(10)->get();
        $events = Event::limit(3)->get();

        return view('index', ['destination' => $wisatas, 'event' => $events]);
    }

    public function about()
    {
        return view('about');
    }
}
