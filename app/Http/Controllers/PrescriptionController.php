<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
        date_default_timezone_set('America/Sao_Paulo');
        $bookings = Booking::where('date', date('d-m-Y'))
                           ->where('status', 1)->get();
        
        return view('prescription.index', compact('bookings'));
    }
    

}
