@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              @if(Session::has('message'))
              <div class="alert alert-success">
                  {{Session::get('message')}}
              </div>
              @endif
              <div class="card-header" >
       
                     Agendamentos ({{$bookings->count()}})
                 </div>

                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Foto</th>
                          <th scope="col">Data</th>
                          <th scope="col">Usuário</th>
                          <th scope="col">Email</th>
                          <th scope="col">Telefone</th>
                          <th scope="col">Gênero</th>

                          <th scope="col">Horário</th>
                          <th scope="col">Médico</th>
                          <th scope="col">Status</th>
                          <th scope="col">Prescrição</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($bookings as $key=>$booking)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td><img src="{{asset('/profile')}}/{{$booking->user->image}}" width="80" style="border-radius: 50%;">
                          </td>
                          <td>
                             {{$booking->date}}                            
                          </td>
                          <td>{{$booking->user->name}}</td>
                          <td>{{$booking->user->email}}</td>
                          <td>{{$booking->user->phone_number}}</td>
                          <td>{{$booking->user->gender}}</td>
                          <td>{{$booking->time}}</td>
                          <td>{{$booking->doctor->name}}</td>
                          <td>
                            @if($booking->status==1)
                             Prescrito
                             @endif
                          </td>
                          <td>
                              <!-- Button trigger modal -->
                       
                @if(!App\Prescription::where('date',date('d-m-Y'))->where('doctor_id',auth()->user()->id)->where('user_id',$booking->user->id)->exists())
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$booking->user_id}}">
                                Prescrever
                    </button>
                    @include('prescription.form')

                    @else 
                   <a href="{{route('prescription.show',[$booking->user_id,$booking->date])}}" class="btn btn-secondary">Ver Prescrição</a>
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
        <script src="{{ asset('js/app.js') }}"defer></script>


@endsection
