<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {
        $statistics = $this->getStatistics();
        $latestTransactions = Transaction::with('event')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact('statistics', 'latestTransactions'));
    }

    /**
     * Get dashboard statistics
     */
    public function getStatistics()
    {
        $totalRevenue = Transaction::where('status', 'paid')->sum('total_price');
        $ticketsSold = Transaction::where('status', 'paid')->count();
        $activeEvents = Event::count();
        $pendingOrders = Transaction::where('status', 'pending')->count();

        return [
            'totalRevenue' => $totalRevenue,
            'ticketsSold' => $ticketsSold,
            'activeEvents' => $activeEvents,
            'pendingOrders' => $pendingOrders,
        ];
    }

    /**
     * API endpoint untuk fetch stats real-time
     */
    public function getStats(Request $request)
    {
        $stats = $this->getStatistics();

        return response()->json($stats);
    }

    /**
     * API endpoint untuk fetch latest transactions real-time
     */
    public function getLatestTransactions(Request $request)
    {
        $transactions = Transaction::with('event')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return response()->json([
            'data' => $transactions->map(fn($t) => [
                'id' => $t->id,
                'customer_name' => $t->customer_name,
                'customer_email' => $t->customer_email,
                'event_title' => $t->event->title ?? 'N/A',
                'status' => $t->status,
                'total_price' => 'Rp ' . number_format($t->total_price, 0, ',', '.'),
            ])
        ]);
    }
}
