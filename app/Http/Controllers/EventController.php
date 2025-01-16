<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('list-event');
    }

    public function musik()
    {
        return view('kategori-event');
    }

    public function singphoria()
    {
        return view('event');
    }
}
