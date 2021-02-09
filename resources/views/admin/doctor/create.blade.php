@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Médicos</h5>
                    <span>Cadastrar Médico</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Médico</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">

    <div class="col-lg-10">
        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message')}}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Cadastrar Médico</h3>
            </div>
                <div class="card-body">
                    <form action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data" class="form-sample">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Nome</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nome completo" value="{{ old('name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <label for="">E-mail</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Senha</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <label for="">Gênero</label>
                                <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                    <option value="">Gênero...</option>
                                    <option value="male">Masculino</option>
                                    <option value="female">Feminino</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Especilidade</label>
                                <input type="text" name="education" class="form-control @error('education') is-invalid @enderror" placeholder="Especilidade" value="{{ old('education') }}">
                                @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <label for="">Endereço</label>
                                <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Endereço" value="{{ old('address') }}" ></input>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Departamento</label>
                                <select name="department" class="form-control" id="department">
                                    <option value="">Selecione...</option>
                                    @foreach(App\Department::all() as $department)
                                        <option value="{{$department->department}}">{{$department->department}}</option>
                                    @endforeach
                                </select>
                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <label for="">Telefone</label>
                                <input type="text" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Telefone" value="{{ old('phone_number') }}" ></input>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" class="form-control file-upload-info @error('image') is-invalid @enderror"  placeholder="Upload Image" name="image">
                                        <span class="input-group-append">

                                        </span>
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="role_id">Perfil</label>
                                    <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror">
                                        <option value="">Selecione...</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                        <div class="form-group">
                            <label for="exampleTextarea1">Descrição</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description') }}                                   </textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </div>

                            <button type="submit" class="btn btn-primary mr-2">Cadastrar</button>
                            <button class="btn btn-light">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
