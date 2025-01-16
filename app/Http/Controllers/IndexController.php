<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::limit(10)->get();
        return view('index', ['data' => $wisatas]);
    }

    public function about()
    {
        return view('about');
    }
}
