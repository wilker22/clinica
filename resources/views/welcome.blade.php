@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="{{asset('banner/online-medicine-concept_160901-152.jpg')}}" class="img-fluid" style="border:1px solid #ccc" alt="">
        </div>

        <div class="col-md-6">
            <h2>Registre sua conta e Agende sua consulta</h2>
            <p>
                Nossa Clínica tem o compromisso em atender bem nossos pacientes, disponibilizando os melhores especilistas para cuidar da sua saúde e da sua família.
                Após registrar-se e agendar sua consulta, nossa equipe entrará em contato para confirmar sua consulta, após o atendimentos suas prescrições estarão disponíveis 
                na página do seu perfil.

            </p>
            <div class="mt-5">
                <a href="{{ url('/register')}}">
                    <button class="btn btn-success">Registrar como PACIENTE</button>
                </a>
                <a href="{{ url('/login')}}">
                    <button class="btn btn-secondary">Entrar</button>
                </a>
            </div>
        </div>
    </div>
    <hr>

    <!-- search doctor-->
    <form action="{{url('/')}}" method="get">
        <div class="card">
            <div class="card-body">
                <div class="car-header">Pesquisar Médicos (escolha a data)</div>
                <div class="car-body">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="date" id="datepicker" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- display doctors-->
    <div class="card">
        <div class="card-body">
            <div class="car-header">Médicos</div>
            <div class="car-body">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nome</th>
                            <th>Especialidade</th>
                            <th>Agendamento</th>
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
                                    <button class="btn btn-success">Agendamentos</button>
                               </a>
                            </td>
                        </tr>
                        @empty
                        <td>Nunhum Médico agendado para esta data, escolha uma nova data!!</td>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
