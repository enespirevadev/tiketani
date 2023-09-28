<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\Venue;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tournaments = Tournament::all()->pluck('name', 'id')->toArray();
        $venues = Venue::all()->pluck('name', 'id')->toArray();
        $teams = Team::all()->pluck('name', 'id')->toArray();
        $events = Event::latest()->get();

        return view('home', [
            'events' => $events,
            'venues' => $venues,
            'teams' => $teams,
            'tournaments' => $tournaments,
        ]);
    }
    
    public function buy(): View
    {
    }

}
