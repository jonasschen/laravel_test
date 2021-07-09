@extends('templates.index')

@section('content')
    <div>
        <div class="col-12">
            Inclusão de Partida
        </div>
    </div>

    <form class="form-horizontal" role="form" autocomplete="off" method="POST" action="{{ route('matches.store') }}">
        @method('POST')
        @csrf

        @include('matches.form')

        @include('templates.form_actions')
    </form>

@endsection