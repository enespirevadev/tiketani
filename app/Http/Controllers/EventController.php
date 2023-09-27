<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\Venue;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use Illuminate\Support\Carbon;

class EventController extends Controller
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

        return view('events.index', [
            'events' => $events,
            'venues' => $venues, 
            'teams' => $teams, 
            'tournaments' => $tournaments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tournaments = Tournament::orderBy('name')->get();
        $venues = Venue::orderBy('name')->get();
        $teams = Team::orderBy('name')->get();

        return view('events.create', ['venues' => $venues, 'teams' => $teams, 'tournaments' => $tournaments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'start' => 'required',
            'end' => 'required',
            'available_seats' => 'required',
            'tournament_id' => 'required',
            'venue_id' => 'required',
            'teamA_id' => 'required',
            'teamB_id' => 'required',
            'categoryA_price' => 'required',
            'categoryB_price' => 'required',
            'categoryC_price' => 'required',
            'categoryD_price' => 'required',
        ]);
#        var_dump($validated);exit;
        if ($validated) {
// var_dump($request->start);
//             $validated['start'] = Carbon::createFromFormat('d/m/Y, H:i', $request->start)->format('Y-m-d');
// var_dump($validated['start']);
// exit;
            Event::create($validated);
        }

        return redirect(route('events.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event): View
    {
        return view('events.edit', [
            'event' => $event,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);
        $event->update($validated);

        return redirect(route('events.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event): RedirectResponse
    {
        $event->delete();

        return redirect(route('events.index'));
    }
}
