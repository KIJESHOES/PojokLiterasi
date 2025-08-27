<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class VisitController extends Controller
{
    public static function getVisitStats()
    {
        $today = Carbon::today();
        $weekStart = Carbon::now()->startOfWeek();
        $monthStart = Carbon::now()->startOfMonth();
        $yearStart = Carbon::now()->startOfYear();

        return [
            'daily' => Visit::whereDate('created_at', $today)->count(),
            'weekly' => Visit::whereBetween('created_at', [$weekStart, Carbon::now()])->count(),
            'monthly' => Visit::whereBetween('created_at', [$monthStart, Carbon::now()])->count(),
            'yearly' => Visit::whereBetween('created_at', [$yearStart, Carbon::now()])->count(),
            'total' => Visit::count(),
        ];
    }
}
