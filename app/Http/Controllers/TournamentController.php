<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tournaments = Tournament::latest()->get();
        return view('tournaments.index', [
            'tournaments' => $tournaments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('tournaments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);
        //var_dump($validated);exit;
        Tournament::create($validated);

        return redirect(route('tournaments.update'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tournament $tournament): View
    {
        return view('tournaments.edit', [
            'tournament' => $tournament,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tournament $tournament): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);
        $tournament->update($validated);

        return redirect(route('tournaments.store'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $tournament): RedirectResponse
    {
        $tournament->delete();

        return redirect(route('tournaments.index'));
    }
}
