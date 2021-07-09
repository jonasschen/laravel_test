@extends('templates.index')

@section('content')
    <div>
        <div class="col-12">
            <a href="{{ route('matches.create') }}">
                + Incluir
            </a>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>Adversário</th>
                    <th>Escalação</th>
                    <th>Dt Início</th>
                    <th>Dt. Término</th>
                </tr>
            </thead>
            <tbody>
                @forelse($matches as $match)
                <tr>
                    <td>
                        <div>
                            <a href="{{ route('matches.edit', $match->id) }}">Editar</a>
                            &nbsp;&nbsp;
                            <a href="#" data-toggle="modal" data-target="#modal-destroy" data-url="{{ route('matches.destroy', $match->id) }}">
                                Excluir
                            </a>
                            &nbsp;&nbsp;

                            <a href="{{ route('matches.start', $match->id) }}">Iniciar partida</a>
                        </div>
                    </td>
                    <td>{{ $match->opposing_team }}</td>
                    <td>
                        @foreach ($match->matchPlayers as $matchPlayer)
                            {{$matchPlayer->player->name}} [{{$matchPlayer->player->number}}] <br>
                        @endforeach
                    </td>
                    <td>{{ $match->started_at }}</td>
                    <td>{{ $match->finished_at }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">Nenhum registro</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @include('templates.destroy')
@endsection