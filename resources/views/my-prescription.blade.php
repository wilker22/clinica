@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Minhas Prescrições</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Médico</th>
                            <th scope="col">Doença</th>
                            <th scope="col">Sintomas</th>
                            <th scope="col">Medicamentos</th>
                            <th scope="col">Como usar os medicamentos:</th>
                            <th scope="col">Diagnóstico do Médico</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($prescriptions as $prescription)
                              <tr>
                                <th scope="row">{{ $prescription->date }}</th>
                                <td>{{ $prescription->doctor->name }}</td>
                                <td>{{ $prescription->name_of_disease }}</td>
                                <td>{{ $prescription->symptoms }}</td>
                                <td>{{ $prescription->medicine }}</td>
                                <td>{{ $prescription->procedure_to_use_medicine }}</td>
                                <td>{{ $prescription->feedback }}</td>
                              </tr>      
                            @empty
                                <td>Você ainda não tem prescrições</td>
                            @endforelse
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
