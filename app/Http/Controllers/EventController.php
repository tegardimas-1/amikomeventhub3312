<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    /**
     * Show the event detail page
     */
    public function show($id)
    {
        $event = Event::with('category')->findOrFail($id);
        return view('event-detail', compact('event'));
    }

    /**
     * Show the checkout page for an event
     */
    public function checkout($id)
    {
        $event = Event::with('category')->findOrFail($id);
        return view('checkout', compact('event'));
    }

    /**
     * Show events catalog/listing
     */
    public function index(Request $request)
    {
        $query = Event::with('category');
        
        // Filter by category jika ada
        if ($request->has('kategori') && $request->kategori != '') {
            $query->where('category_id', $request->kategori);
        }
        
        // Search by title
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('title', 'LIKE', '%' . $search . '%')
                  ->orWhere('description', 'LIKE', '%' . $search . '%');
        }
        
        $events = $query->latest()->paginate(12);
        $categories = Category::all();
        
        return view('katalog', compact('events', 'categories'));
    }
}
