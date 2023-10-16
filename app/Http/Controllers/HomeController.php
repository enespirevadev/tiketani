<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Event;
use App\Models\Order;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tournaments = Tournament::all()->pluck('name', 'id')->toArray();
        $venues = Venue::all()->pluck('name', 'id')->toArray();
        $teams = Team::all()->pluck('name', 'id')->toArray();
        $events = Event::latest()->get();

        $viewData = [
            'events' => $events,
            'venues' => $venues,
            'teams' => $teams,
            'tournaments' => $tournaments,
        ];

        if ($orderId = $request->query('order')) {
            $order = Order::find($orderId);
            if ($order) {
                $viewData['order'] = $order;
                $viewData['checkoutStatus'] = $request->query('status');
            }
        }

        return view('home', $viewData);
    }

    public function checkout(Request $request, Event $event)
    {
        $categories = [
            'A' => 'Category A (' . $event->categoryA_price . ' EUR)',
            'B' => 'Category B (' . $event->categoryB_price . ' EUR)',
            'C' => 'Category C (' . $event->categoryC_price . ' EUR)',
            'D' => 'Category D (' . $event->categoryD_price . ' EUR)',
        ];
        $seats = [1, 2, 3, 4, 5];
        $genders = [
            'f' => 'Female',
            'm' => 'Male',
            'd' => 'Rather not say',
        ];

        $checkoutStatus = $newOrder = '';
        if ($request->isMethod('post')) {
            $customValidation = true;
            if (!array_key_exists($request->gender, $genders)) {
                $customValidation = false;
            }
            if (!array_key_exists(strtoupper($request->category), $categories)) {
                $customValidation = false;
            }
            if (!in_array($request->seats, $seats)) {
                $customValidation = false;
            }
            $customerValidated = $request->validate([
                'gender' => 'required',
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'address_street' => 'required|string|max:500',
                'address_zipcode' => 'required|string',
            ]);
            $orderValidated = $request->validate([
                'category' => 'required',
                'seats' => 'required',
            ]);

            if ($customValidation && $customerValidated && $orderValidated) {
                $customerData = $customerValidated;
                $customerData['address_country'] = 'Kosova';
                $customerData['terms_accepted_at'] = date('Y-m-d H:i:s');

                $newCustomer = Customer::create($customerData);
                if ($newCustomer) {
                    $orderData = $orderValidated;

                    $orderData['event_id'] = $event->id;
                    $orderData['customer_id'] = $newCustomer->id;

                    $orderData['order_date'] = date('Y-m-d H:i:s');
                    $orderData['order_number'] = time();

                    $category = strtoupper($request->category);
                    $orderData['category'] = $category;

                    if ($category == 'A') {
                        $orderData['category_price'] = $event->categoryA_price;
                    } elseif ($category == 'B') {
                        $orderData['category_price'] = $event->categoryB_price;
                    } elseif ($category == 'C') {
                        $orderData['category_price'] = $event->categoryC_price;
                    } elseif ($category == 'D') {
                        $orderData['category_price'] = $event->categoryD_price;
                    }

                    $orderData['total_price'] = $orderData['category_price'] * $orderData['seats'];

                    $newOrder = Order::create($orderData);
                    if ($newOrder) {
                        return redirect(route('home', ['order' => $newOrder->id, 'status' => 'success']));
                    }
                }
            } else {
                return redirect(route('home', ['order' => '-1', 'status' => 'failed']));
            }
        }

        return view('home.checkout', [
            'event' => $event,
            'categories' => $categories,
            'seats' => $seats,
            'genders' => $genders,
            'checkoutStatus' => $checkoutStatus,
            'newOrder' => $newOrder,
        ]);
    }

}
