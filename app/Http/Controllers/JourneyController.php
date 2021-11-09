<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journey;

class JourneyController extends Controller
{
    public function index() 
    {
        $journeys = Journey::all();
        return view('index', compact('journeys'));
    }
}
