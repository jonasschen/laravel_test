@extends('templates.index')

@section('content')
    <div>
        <div class="col-12">
            Alteração da partida contra: {{$match->opposing_team}}
        </div>
    </div>

    <form class="form-horizontal" role="form" autocomplete="off" method="POST" action="{{ route('matches.update', $match->id) }}">
        @method('PUT')
        @csrf

        @include('matches.form')

        @include('templates.form_actions')
    </form>

@endsection