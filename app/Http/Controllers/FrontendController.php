<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Booking;
use App\Time;
use App\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use App\Mail\AppointmentMail;

class FrontendController extends Controller
{
    public function index()
    {
        // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
        date_default_timezone_set('America/Sao_Paulo');

        if(request('date')){
            $doctors = $this->findDoctorsBasedOnDate(request('date'));
            return view('welcome', compact('doctors'));

        }
        $doctors = Appointment::where('date', date('d-m-Y'))->get();
        return view('welcome', compact('doctors'));
    }

    public function show($doctorId, $date)
    {
        $appointment = Appointment::where('user_id', $doctorId)->where('date', $date)->first();
        $times = Time::where('appointment_id', $appointment->id)->where('status', 0)->get();
        $user = User::where('id', $doctorId)->first();
        $doctor_id = $doctorId;
        return view('appointment', compact('times', 'date', 'user', 'doctor_id'));
    }

    public function  findDoctorsBasedOnDate($date)
    {
        $doctors = Appointment::where('date', $date)->get();
        return $doctors;
    }

    public function store(Request $request)
    {
        $request->validate(['time'=> 'required']);
        $check = $this->checkBookingTimeInterval();
        if($check){
            return redirect()->back()->with('errmessage', 'You alredy made an appointment. Please waite to make next appointment!');
        }

        Booking::create([
            'user_id' => auth()->user()->id,
            'doctor_id' => $request->doctorId,
            'time' => $request->time,
            'date' => $request->date,
            'status' => 0
        ]);

        Time::where('appointment_id', $request->appointmentId)
            ->where('time', $request->time)
            ->update(['status' => 1]);

        //send e-mail notification
        $doctorName = User::where('id', $request->doctorId)->first();

        $mailData = [
            'name' => auth()->user()->name,
            'time' => $request->time,
            'date' => $request->date,
            'doctorName' =>  $doctorName->name
        ];

        try{
            \Mail::to(auth()->user()->email)->send(new AppointmentMail($mailData));
        }catch(\Exception $e){
            echo "erro";
        }

        return redirect()->back()->with('message', 'Your appointment was booked!');
    }

    public function checkBookingTimeInterval()
    {
        return Booking::orderby('id', 'desc')
                    ->where('user_id', auth()->user()->id)
                    ->whereDate('created_at', date('Y-m-d'))
                    ->exists();
    }
}
