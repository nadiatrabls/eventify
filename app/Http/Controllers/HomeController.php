<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer toutes les catégories et événements
        $categories = Category::all();
        $events = Event::all();

        // Passer les données à la vue
        return view('welcome', compact('categories', 'events'));
    }
}
