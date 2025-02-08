<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::where('date', '>=', Carbon::today())
            ->orderBy('date')
            ->orderBy('time')
            ->get();

        return view('admin.reservations.index', compact('reservations'));
    }
}
