@extends('admin.layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Agendamentos ({{$bookings->count()}})</div>

                <form action="{{route('patient')}}" method="GET">
                      <div class="card-header">
                          Filtro   
                          <div class="row">
                            <div class="col-md-10">
                                <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
                            </div>
                            <div class="col-md-2">
                              <button type="submit" class="btn btn-primary">Buscar por Data</button>
                            </div>
                          </div>
                    </div>
                </form>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Data</th>
                            <th>Usuário</th>
                            <th>E-Mail</th>
                            <<th>Telefone</th>
                            <th>Horário</th>
                            <th>Médico</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($bookings as $key=>$booking)
                          <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>
                              <img src="localhost/doctor/public/profile/{{$booking->user->image}}" width="80" style="border-radius: 50%;">
                            </td>
                            <td>{{ $booking->date }}</td>
                            <td>{{ $booking->user->name }}</td>
                            <td>{{ $booking->user->email }}</td>
                            <td>{{ $booking->user->phone_number }}</td>
                            <td>{{ $booking->time }}</td>
                            <td>{{ $booking->doctor->name }}</td>
                            <td>
                              @if($booking->status==0)
                              <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-primary"> A Confirmar</button></a>
                              @else 
                               <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-success"> Confirmado</button></a>
                              @endif
                            </td>
                          </tr>

                          @empty
                          <td>Não há agendamentos para hoje!</td>

                          @endforelse


                        </tbody>
                      </table>
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
