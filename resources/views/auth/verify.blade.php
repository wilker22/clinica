@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação será encaminha para seu e-mail cadastrado.') }}
                        </div>
                    @endif

                    {{ __('Antes de iniciar, verifique seu e-mail!') }}
                    {{ __('Caso você não tenha recebido o e-mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click para receber novo') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
