@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="{{asset('banner/online-medicine-concept_160901-152.jpg')}}" class="img-fluid" style="border:1px solid #ccc" alt="">
        </div>

        <div class="col-md-6">
            <h2>Create an acount & Book Appointment</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
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

    <!-- datepicker component-->
    <find-doctor></find-doctor>

</div>
@endsection
