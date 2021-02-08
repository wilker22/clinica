<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
        date_default_timezone_set('America/Sao_Paulo');
        $bookings = Booking::where('date', date('d-m-Y'))
                           ->where('doctor_id', auth()->user()->id)
                           ->where('status', 1)->get();
        
        return view('prescription.index', compact('bookings'));
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        $data['medicine'] = implode(',',$request->medicine);
        Prescription::create($data);
        return redirect()->back()->with('message', 'Prescription Created!');
    }

}
