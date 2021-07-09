@extends('templates.index')

@section('content')
    <div>
        <div class="col-12">
            Inclusão de Jogador
        </div>
    </div>

    <form class="form-horizontal" role="form" autocomplete="off" method="POST" action="{{ route('players.store') }}">
        @method('POST')
        @csrf

        @include('players.form')

        @include('templates.form_actions')
    </form>

@endsection