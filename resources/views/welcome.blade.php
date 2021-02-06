@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="{{asset('banner/online-medicine-concept_160901-152.jpg')}}" class="img-fluid" style="border:1px solid #ccc" alt="">
        </div>

        <div class="col-md-6">
            <h2>Create an acount & Book Appointment</h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate quisquam mollitia tenetur est odit delectus modi reprehenderit suscipit, libero optio eum explicabo recusandae asperiores illo, saepe neque, aliquid illum. Blanditiis!

            </p>
            <div class="mt-5">
                <a href="{{ url('/register')}}">
                    <button class="btn btn-success">Register as a patient</button>
                </a>
                <a href="{{ url('/login')}}">
                    <button class="btn btn-secondary">Login</button>
                </a>
            </div>
        </div>
    </div>
    <hr>

    <!-- search doctor-->
    <form action="{{url('/')}}" method="get">
        <div class="card">
            <div class="card-body">
                <div class="car-header">Find Doctors</div>
                <div class="car-body">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="date" id="datepicker" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Find Doctors</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- display doctors-->
    <div class="card">
        <div class="card-body">
            <div class="car-header">Doctors</div>
            <div class="car-body">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Expertise</th>
                            <th>Book</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($doctors as $doctor)
                        <tr>
                            <th>1</th>
                            <td><img src="{{ asset('images')}}/{{$doctor->doctor->image}}" width="100px" style="border-radius: 50%" alt=""></td>
                            <td>{{$doctor->doctor->name}}</td>
                            <td>{{$doctor->doctor->department}}</td>
                            <td>
                               <a href="{{ route('create.appointment', [$doctor->user_id, $doctor->date])}}">
                                    <button class="btn btn-success">Book appoitment</button>
                               </a>
                            </td>
                        </tr>
                        @empty
                        <td>Nunhum Médico agendado para hoje!!</td>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
