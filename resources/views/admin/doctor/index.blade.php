@extends('admin.layouts.master')

@section('content')

                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-inbox bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Médicos</h5>
                                            <span>Lista de Médicos</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Médicos</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Lista</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                @if (Session::has('message'))
                                    <div class="alert alert-success">
                                        {{ Session::get('message')}}
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-header"><h3>Relação de Médicos</h3></div>
                                    <div class="card-body">
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th class="nosort">Foto</th>
                                                    <th>E-mail</th>
                                                    <th>Endereço</th>
                                                    <th>Telefone</th>
                                                    <th>Departamento</th>
                                                    <th class="nosort">&nbsp;</th>
                                                    <th class="nosort">&nbsp;</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (count($doctors) > 0)
                                                    @foreach ($doctors as $doctor)
                                                        <tr>
                                                            <td>{{$doctor->name}}</td>
                                                            <td><img src="{{asset('images')}}/{{$doctor->image}}" class="table-user-thumb" alt=""></td>
                                                            <td>{{$doctor->email}}</td>
                                                            <td>{{$doctor->address}}</td>
                                                            <td>{{$doctor->phone_number}}</td>
                                                            <td>{{$doctor->department}}</td>
                                                            <td>
                                                                <div class="table-actions">
                                                                    <a href="#" data-toggle="modal" data-target="#exampleModal{{$doctor->id}}"><i class="ik ik-eye"></i></a>
                                                                    <a href="{{ route('doctor.edit', $doctor->id) }}"><i class="ik ik-edit-2"></i></a>
                                                                    <a href="{{ route('doctor.show', $doctor->id) }}"><i class="ik ik-trash-2"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <!-- View Modal -->
                                                        @include('admin.doctor.modal')

                                                    @endforeach
                                                @else

                                                        <td>Nenhum Médico cadastrado!</td>

                                                @endif




                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
