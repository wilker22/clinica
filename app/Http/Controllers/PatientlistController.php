<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class PatientlistController extends Controller
{

    public function index(Request $request)
    {
        // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
        date_default_timezone_set('America/Sao_Paulo');
        if($request->date){
            $bookings = Booking::latest()->where('date', $request->date)->get();
            return view('admin.patientlist.index', compact('bookings'));
        }
        
        $bookings = Booking::latest()->where('date', date('d-m-Y'))->get();
        return view('admin.patientlist.index', compact('bookings'));
    }

    public function toggleStatus($id)
    {
        $booking = Booking::find($id);
        $booking->status =! $booking->status;
        $booking->save();
        return redirect()->back();
    }

    public function allTimeAppointment()
    {
        $bookings = Booking::latest()->paginate(5);
        return view('admin.patientlist.all', compact('bookings'));
    }

}
