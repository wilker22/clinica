@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
             
              <div class="card-header" >
                <H4>PRESCRIÇÃO</H4>
                    
                </div>

                <div class="card-body">
                    <p><b>Data: </b> {{$prescription->date}}</p>
                    <p><b>Paciente: </b> {{$prescription->user->name}}</p>
                    <p><b>Médico: </b> {{$prescription->doctor->name}}</p>
                    <p><b>C.I.D.: </b> {{$prescription->name_of_disease}}</p>
                    <p><b>Sintomas: </b> {{$prescription->symptoms}}</p>
                    <p><b>Medicamentos: </b> {{$prescription->medicine}}</p>
                    <p><b>Procedimentos para administração:</b> {{$prescription->procedure_to_use_medicine}}</p>
                    <p><b>Diagnóstico: </b> {{$prescription->feedback}}</p>
                    <p><b>C.R.M.: </b> {{$prescription->signature}}</p>

                  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
