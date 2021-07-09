@extends('templates.index')

@section('content')
    <div>
        <div class="col-12">
            Alteração do Jogador: {{$player->name}}
        </div>
    </div>

    <form class="form-horizontal" role="form" autocomplete="off" method="POST" action="{{ route('players.update', $player->id) }}">
        @method('PUT')
        @csrf

        @include('players.form')

        @include('templates.form_actions')
    </form>

@endsection