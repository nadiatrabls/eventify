<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $events = Event::all();
        $reservations = Reservation::all();
        return view('admin', compact('categories', 'events', 'reservations'));
    }
}
