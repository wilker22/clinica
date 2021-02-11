@extends('layouts.app')

@section('content')
<div class="container">

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="row">

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Perfil do Paciente</div>

                <div class="card-body">
                    <p>Nome: {{ auth()->user()->name }}</p>
                    <p>E-mail: {{ auth()->user()->email }}</p>
                    <p>Endereço: {{ auth()->user()->address }}</p>
                    <p>Telefone: {{ auth()->user()->phone_number }}</p>
                    <p>Gênero: {{ auth()->user()->gender }}</p>
                    <p>Descrição: {{ auth()->user()->description }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Alterar Dados</div>

                <div class="card-body">
                    <form action="{{ route('profile.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" name="name" class="form-control @error('name') is-valid @enderror" value="{{ auth()->user()->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Endereço</label>
                            <input type="text" name="address" class="form-control" value="{{ auth()->user()->address }}">
                        </div>

                        <div class="form-group">
                            <label for="">Telefone</label>
                            <input type="text" name="phone_number" class="form-control" value="{{ auth()->user()->phone_number }}">
                        </div>

                        <div class="form-group">
                            <label for="">Gênero</label>
                            <select name="gender" id="gender" class="form-control  @error('gender') is-valid @enderror">
                                <option value="">Selecione...</option>
                                <option value="male" @if(auth()->user()->gender==='male') selected @endif>Masculino</option>
                                <option value="female" @if(auth()->user()->gender==='female') selected @endif>Feminino</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Descrição</label>
                            <textarea name="description" id="" cols="30" rows="5" class="form-control">
                                {{ auth()->user()->description }}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Gravar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Alterar foto</div>

                <form action="{{ route('profile.pic') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @if(!auth()->user()->image)
                            <img src="{{ asset('images/b2kb8ng9xUGjx2VdgLkozDRp4Y8O5jl3l9OU9zAi.jpg') }}" width="120" alt="">
                        @else
                            <img src="{{ asset('profile/'.auth()->user()->image) }}" width="120" alt="">
                        @endif
                        <br>
                        <input type="file" name="file" id="" class="form-control" required>
                        @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-primary">Gravar</button>

                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
