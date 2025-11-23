<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(){
        return view('reservation');   //vista que returna formulario de reserva
    }

    public function index(){
        $reservations = Reservation::all();
        return view('reservationlist', compact('reservations'));
    }
    // guardando el formulario 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'guest_count' => 'required|integer|min:1',
            'reservation_time' => 'required|date|after:now',
        ]);

        Reservation::create($validated);

        return redirect()->route('reservation')->with('success', 'Your reservation has been submitted! We will confirm soon.');
    }




}


 
  