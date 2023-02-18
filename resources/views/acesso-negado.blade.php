@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Acesso negado') }}</div>

                    <div class="card-body">

                        <div>
                            {{ __('Desculpe, você não tem acesso a esse recurso') }}
                        </div>
                        <div>
                            <a href="{{ url('/tarefa') }}" class="text-sm text-gray-700 underline">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
