<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\Venue;
use Illuminate\Http\Request;
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

    public function checkout(Request $request, Event $event): View
    {
        $categories = [
            'A' => 'Category A ('.$event->categoryA_price.' EUR)',
            'B' => 'Category B ('.$event->categoryB_price.' EUR)',
            'C' => 'Category C ('.$event->categoryC_price.' EUR)',
            'D' => 'Category D ('.$event->categoryD_price.' EUR)',
        ];
        $seats = [1, 2, 3, 4, 5];
        $genders = [
            'f' => 'Female',
            'm' => 'Male',
            'd' => 'Rather not say',
        ];

        if ($request->isMethod('post')) {
            // here comes the magic
            // create customer from request/post data
            // create order for event and customer
            $requestData = $request->all();
            var_dump($requestData);

            exit('in post');
        }

        return view('home.checkout', [
            'event' => $event,
            'categories' => $categories,
            'seats' => $seats,
            'genders' => $genders,
        ]);
    }

}
