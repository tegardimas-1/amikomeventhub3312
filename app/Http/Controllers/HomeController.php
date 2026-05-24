<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::with('category')
            ->when($request->kategori, function($q) use ($request) {
                $q->where('category_id', $request->kategori);
            })
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
        
        $categories = Category::all();
        $partners   = Partner::all();
        
        return view('home', compact('events', 'categories', 'partners'));
    }
}